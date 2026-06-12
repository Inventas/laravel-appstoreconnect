<?php

namespace Inventas\AppStoreConnectKit\CodeGeneration\Generators;

use cebe\openapi\spec\Reference;
use cebe\openapi\spec\Schema;
use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Generator;
use Crescat\SaloonSdkGenerator\Helpers\NameHelper;
use Crescat\SaloonSdkGenerator\Helpers\Utils;
use Inventas\AppStoreConnectKit\CodeGeneration\OpenApi\OpenApiStringEnum;
use Inventas\AppStoreConnectKit\CodeGeneration\OpenApi\OpenApiTypeResolver;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Literal;
use Nette\PhpGenerator\PhpFile;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class TypedDtoGenerator extends Generator
{
    /** @var array<string, PhpFile> */
    protected array $generated = [];

    private OpenApiTypeResolver $resolver;

    public function generate(ApiSpecification $specification): PhpFile|array
    {
        $schemas = $specification->components->schemas ?? [];
        $this->resolver = new OpenApiTypeResolver($schemas);

        if ($specification->components) {
            foreach ($specification->components->schemas as $className => $schema) {
                if ($this->resolver->isEnumSchema($schema)) {
                    $this->generateEnum(NameHelper::safeClassName($className), $schema);

                    continue;
                }

                if ($this->resolver->isDtoSchema($schema)) {
                    $this->generateDtoClass(NameHelper::safeClassName($className), $schema);
                }
            }
        }

        return $this->generated;
    }

    private function generateEnum(string $className, Schema|Reference $schema): PhpFile
    {
        $enumName = NameHelper::dtoClassName($className ?: $this->config->fallbackResourceName);

        if (isset($this->generated[$enumName])) {
            return $this->generated[$enumName];
        }

        if (! $schema instanceof Schema) {
            throw new \RuntimeException("Unable to generate enum [{$enumName}] from a reference schema.");
        }

        $enumFile = new PhpFile;
        $namespace = $enumFile
            ->addNamespace("{$this->config->namespace}\\{$this->config->dtoNamespaceSuffix}");
        $enumType = $namespace->addEnum($enumName)
            ->setType('string')
            ->setComment($schema->title ?? $enumName)
            ->addComment('')
            ->addComment(Utils::wrapLongLines($schema->description ?? ''));

        foreach (OpenApiStringEnum::cases($schema) as $caseName => $value) {
            $enumType->addCase($caseName, $value);
        }

        return $this->generated[$enumName] = $enumFile;
    }

    private function generateDtoClass(string $className, Schema|Reference $schema): PhpFile
    {
        $dtoName = NameHelper::dtoClassName($className ?: $this->config->fallbackResourceName);

        if (isset($this->generated[$dtoName])) {
            return $this->generated[$dtoName];
        }

        $classType = new ClassType($dtoName);
        $classFile = new PhpFile;
        $namespace = $classFile
            ->addNamespace("{$this->config->namespace}\\{$this->config->dtoNamespaceSuffix}");

        $classType->setExtends(Data::class)
            ->setComment($schema instanceof Schema ? ($schema->title ?? $dtoName) : $dtoName)
            ->addComment('')
            ->addComment($schema instanceof Schema ? Utils::wrapLongLines($schema->description ?? '') : '');

        $constructor = $classType->addMethod('__construct');
        $generatedMappings = false;
        $generatedOptionalValues = false;

        $this->generated[$dtoName] = $classFile;

        foreach ($this->orderedPropertiesFor($schema) as $propertyName => $propertySpec) {
            $resolved = $this->resolver->resolve($propertySpec, $dtoName, (string) $propertyName);

            foreach ($resolved->nestedSchemas as $nestedClassName => $nestedSchema) {
                $this->generateDtoClass($nestedClassName, $nestedSchema);
            }

            $safeName = NameHelper::safeVariableName((string) $propertyName);
            $required = $this->isRequired($schema, (string) $propertyName);
            $nullable = $this->isNullable($propertySpec);
            $optional = ! $required;
            $docType = $this->docType($resolved->docType, $nullable, $optional);

            $constructor->addComment("@param {$docType} \${$safeName}");

            $property = $constructor->addPromotedParameter($safeName)
                ->setPublic()
                ->setType($this->nativeType($resolved->nativeType, $nullable, $optional));

            if ($optional) {
                $property->setDefaultValue(new Literal('new Optional'));
                $generatedOptionalValues = true;
            }

            if ($resolved->nativeType === 'array' || $resolved->nativeType === 'mixed') {
                $property->setComment("@var {$docType}");
            }

            if ($safeName !== $propertyName) {
                $property->addAttribute(MapName::class, [$propertyName]);
                $generatedMappings = true;
            }
        }

        $namespace->addUse(Data::class, alias: 'SpatieData');

        if ($generatedMappings) {
            $namespace->addUse(MapName::class);
        }

        if ($generatedOptionalValues) {
            $namespace->addUse(Optional::class);
        }

        $namespace->add($classType);

        return $classFile;
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

    /**
     * @return array<string, Schema|Reference>
     */
    private function orderedPropertiesFor(Schema|Reference $schema): array
    {
        $properties = $this->propertiesFor($schema);

        uksort(
            $properties,
            fn (string $left, string $right): int => ((int) ! $this->isRequired($schema, $left))
                <=> ((int) ! $this->isRequired($schema, $right)),
        );

        return $properties;
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

        $qualified = array_map(function (string $part): string {
            return in_array($part, ['array', 'bool', 'float', 'int', 'mixed', 'null', 'object', Optional::class, 'string'], true)
                ? $part
                : "{$this->config->namespace}\\{$this->config->dtoNamespaceSuffix}\\{$part}";
        }, array_values(array_unique($parts)));

        return implode('|', $qualified);
    }
}
