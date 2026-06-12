<?php

namespace Inventas\AppStoreConnectKit\CodeGeneration\Validation;

use cebe\openapi\spec\Reference;
use cebe\openapi\spec\Schema;
use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Data\Generator\GeneratedCode;
use Crescat\SaloonSdkGenerator\Helpers\NameHelper;
use Inventas\AppStoreConnectKit\CodeGeneration\OpenApi\OpenApiStringEnum;
use Inventas\AppStoreConnectKit\CodeGeneration\OpenApi\OpenApiTypeResolver;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\EnumType;
use Spatie\LaravelData\Optional;

class GeneratedDtoTypeValidator
{
    /** @var array<string, ClassType> */
    private array $classes = [];

    /** @var array<string, EnumType> */
    private array $enums = [];

    /** @var array<string, true> */
    private array $validated = [];

    public function __construct(
        private readonly Config $config,
        private readonly ?OpenApiTypeResolver $resolver = null,
    ) {}

    public function validate(ApiSpecification $specification, GeneratedCode $generatedCode): void
    {
        foreach ($generatedCode->dtoClasses as $file) {
            foreach ($file->getClasses() as $class) {
                if ($class instanceof ClassType) {
                    $this->classes[$class->getName()] = $class;
                }

                if ($class instanceof EnumType) {
                    $this->enums[$class->getName()] = $class;
                }
            }
        }

        $schemas = $specification->components->schemas ?? [];
        $resolver = $this->resolver ?? new OpenApiTypeResolver($schemas);

        foreach ($schemas as $className => $schema) {
            $safeClassName = NameHelper::dtoClassName(NameHelper::safeClassName((string) $className));

            if ($resolver->isEnumSchema($schema)) {
                $this->validateEnum($safeClassName, $schema);

                continue;
            }

            if ($resolver->isDtoSchema($schema)) {
                $this->validateDto($safeClassName, $schema, $resolver);
            }
        }
    }

    private function validateEnum(string $className, Schema|Reference $schema): void
    {
        if (! $schema instanceof Schema) {
            return;
        }

        $enum = $this->enums[$className] ?? null;

        if ($enum === null) {
            throw new \RuntimeException("Generated enum [{$className}] is missing.");
        }

        if ($enum->getType() !== 'string') {
            throw new \RuntimeException("Generated enum [{$className}] must be a string-backed enum.");
        }

        $expectedCases = OpenApiStringEnum::cases($schema);

        if (count($enum->getCases()) !== count($expectedCases)) {
            throw new \RuntimeException("Generated enum [{$className}] case count does not match OpenAPI enum values.");
        }

        foreach ($expectedCases as $caseName => $value) {
            $case = $enum->getCases()[$caseName] ?? null;

            if ($case === null || $case->getValue() !== $value) {
                throw new \RuntimeException("Generated enum [{$className}::{$caseName}] does not match OpenAPI value [{$value}].");
            }
        }
    }

    private function validateDto(string $className, Schema|Reference $schema, OpenApiTypeResolver $resolver): void
    {
        if (isset($this->validated[$className])) {
            return;
        }

        $this->validated[$className] = true;
        $class = $this->classes[$className] ?? null;
        $constructor = $class?->getMethods()['__construct'] ?? null;

        if ($constructor === null) {
            throw new \RuntimeException("Generated DTO [{$className}] is missing a constructor.");
        }

        foreach ($this->propertiesFor($schema) as $propertyName => $propertySpec) {
            $resolved = $resolver->resolve($propertySpec, $className, (string) $propertyName);
            $safeName = NameHelper::safeVariableName((string) $propertyName);
            $parameter = $constructor->getParameters()[$safeName] ?? null;
            $required = $this->isRequired($schema, (string) $propertyName);
            $nullable = $this->isNullable($propertySpec);
            $optional = ! $required;

            if ($parameter === null) {
                throw new \RuntimeException("Generated DTO [{$className}] is missing constructor parameter [{$safeName}].");
            }

            $expectedNativeType = $this->nativeType($resolved->nativeType, $nullable, $optional);

            if ($parameter->getType() !== $expectedNativeType) {
                throw new \RuntimeException(sprintf(
                    'Generated DTO [%s::$%s] native type [%s] does not match OpenAPI type [%s].',
                    $className,
                    $safeName,
                    $parameter->getType() ?? 'none',
                    $expectedNativeType,
                ));
            }

            if ($optional !== $parameter->hasDefaultValue()) {
                throw new \RuntimeException(sprintf(
                    'Generated DTO [%s::$%s] default value state does not match OpenAPI required state.',
                    $className,
                    $safeName,
                ));
            }

            $expectedDocType = $this->docType($resolved->docType, $nullable, $optional);

            if (! str_contains($constructor->getComment() ?? '', "@param {$expectedDocType} \${$safeName}")) {
                throw new \RuntimeException("Generated DTO [{$className}::\${$safeName}] PHPDoc type does not match OpenAPI type [{$expectedDocType}].");
            }

            foreach ($resolved->nestedSchemas as $nestedClassName => $nestedSchema) {
                $this->validateDto($nestedClassName, $nestedSchema, $resolver);
            }
        }
    }

    /**
     * @return array<string, Schema|Reference>
     */
    private function propertiesFor(Schema|Reference $schema): array
    {
        if (! $schema instanceof Schema) {
            return [];
        }

        return $schema->properties ?? [];
    }

    private function isRequired(Schema|Reference $schema, string $propertyName): bool
    {
        return $schema instanceof Schema
            && isset($schema->required)
            && in_array($propertyName, $schema->required, true);
    }

    private function isNullable(Schema|Reference $schema): bool
    {
        return $schema instanceof Schema && $schema->nullable === true;
    }

    private function docType(string $type, bool $nullable, bool $optional): string
    {
        $parts = explode('|', $type);

        if ($optional) {
            $parts[] = 'Optional';
        }

        if ($nullable) {
            $parts[] = 'null';
        }

        return implode('|', array_values(array_unique($parts)));
    }

    private function nativeType(string $type, bool $nullable, bool $optional): string
    {
        $parts = explode('|', $type);

        if ($optional) {
            $parts[] = Optional::class;
        }

        if ($nullable) {
            $parts[] = 'null';
        }

        return implode('|', array_map(function (string $part): string {
            return in_array($part, ['array', 'bool', 'float', 'int', 'mixed', 'null', 'object', Optional::class, 'string'], true)
                ? $part
                : "{$this->config->namespace}\\{$this->config->dtoNamespaceSuffix}\\{$part}";
        }, array_values(array_unique($parts))));
    }
}
