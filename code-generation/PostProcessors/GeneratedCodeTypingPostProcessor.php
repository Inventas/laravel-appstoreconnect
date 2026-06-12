<?php

namespace Inventas\AppStoreConnectKit\CodeGeneration\PostProcessors;

use Crescat\SaloonSdkGenerator\Contracts\PostProcessor;
use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Data\Generator\GeneratedCode;
use Inventas\AppStoreConnectKit\CodeGeneration\OpenApi\OpenApiParameterDocTypeMap;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Method;
use Nette\PhpGenerator\PhpFile;
use Saloon\Contracts\Body\HasBody;
use Saloon\Traits\Body\HasJsonBody;

class GeneratedCodeTypingPostProcessor implements PostProcessor
{
    public function __construct(
        private readonly OpenApiParameterDocTypeMap $parameterDocTypes,
    ) {}

    public function process(
        Config $config,
        ApiSpecification $specification,
        GeneratedCode $generatedCode,
    ): PhpFile|array|null {
        if ($generatedCode->connectorClass instanceof PhpFile) {
            foreach ($generatedCode->connectorClass->getClasses() as $class) {
                foreach ($class->getMethods() as $method) {
                    $this->typeArrayReturn($method);
                }
            }
        }

        foreach ($this->endpointPhpFiles($generatedCode) as $file) {
            foreach ($file->getClasses() as $class) {
                foreach ($class->getMethods() as $method) {
                    $this->typeParameters($class, $method);
                    $this->preserveFalsyArrayValues($class, $method);
                    $this->typeArrayReturn($method);
                }

                $this->ensureBodySupport($class);
                $this->serializeDtoBodyPayload($class);
            }
        }

        return null;
    }

    /**
     * @return iterable<PhpFile>
     */
    private function endpointPhpFiles(GeneratedCode $generatedCode): iterable
    {
        foreach ([
            ...$generatedCode->resourceClasses,
            ...$generatedCode->requestClasses,
        ] as $file) {
            yield $file;
        }
    }

    private function typeParameters(ClassType $class, Method $method): void
    {
        $parameters = $method->getParameters();

        if ($parameters === []) {
            return;
        }

        $comment = $this->withoutParameterComments($method->getComment(), array_keys($parameters));

        foreach ($parameters as $parameter) {
            $className = $class->getNamespace()->getName().'\\'.$class->getName();
            $parameterName = $parameter->getName();
            $docType = $this->parameterDocTypes->get($className, $method->getName(), $parameterName);

            if ($docType === null) {
                throw new \RuntimeException(sprintf(
                    'Unable to resolve OpenAPI PHPDoc type for generated parameter [%s::%s::$%s].',
                    $className,
                    $method->getName(),
                    $parameterName,
                ));
            }

            $nativeType = $this->nativeTypeForDocType($docType);

            if (! $this->sameNativeType($parameter->getType(), $nativeType)) {
                throw new \RuntimeException(sprintf(
                    'Generated parameter [%s::%s::$%s] has native type [%s], expected [%s] from the OpenAPI schema.',
                    $className,
                    $method->getName(),
                    $parameterName,
                    $parameter->getType() ?? 'mixed',
                    $nativeType ?? 'mixed',
                ));
            }

            if ($parameter->isNullable() !== str_contains($docType, 'null')) {
                throw new \RuntimeException(sprintf(
                    'Generated parameter [%s::%s::$%s] has nullable state [%s], expected [%s] from the OpenAPI schema.',
                    $className,
                    $method->getName(),
                    $parameterName,
                    $parameter->isNullable() ? 'nullable' : 'not nullable',
                    str_contains($docType, 'null') ? 'nullable' : 'not nullable',
                ));
            }

            $comment[] = "@param {$docType} \${$parameterName}";

            if ($method->getName() === '__construct' && str_starts_with($docType, 'array<')) {
                $parameter->setComment("@var {$docType}");
            }
        }

        $method->setComment(implode("\n", $comment));
    }

    private function typeArrayReturn(Method $method): void
    {
        if ($method->getReturnType() !== 'array') {
            return;
        }

        $comment = $this->withoutReturnComments($method->getComment());
        $comment[] = '@return array<string, mixed>';

        $method->setComment(implode("\n", $comment));
    }

    private function ensureBodySupport(ClassType $class): void
    {
        if (! isset($class->getMethods()['defaultBody'])) {
            return;
        }

        if (! in_array(HasBody::class, $class->getImplements(), true)) {
            $class->addImplement(HasBody::class);
        }

        if (! $class->hasTrait(HasJsonBody::class)) {
            $class->addTrait(HasJsonBody::class);
        }

        $namespace = $class->getNamespace();

        if ($namespace !== null) {
            $namespace
                ->addUse(HasBody::class)
                ->addUse(HasJsonBody::class)
                ->addUse(PayloadSerializer::class);
        }
    }

    private function preserveFalsyArrayValues(ClassType $class, Method $method): void
    {
        $body = $method->getBody();

        if (! str_starts_with(trim($body), 'return array_filter(')) {
            return;
        }

        $arrayExpression = (string) preg_replace(
            '/^return array_filter\((.*)\);$/s',
            '$1',
            trim($body),
        );

        if (! $this->hasNullableConstructorParameter($class)) {
            $method->setBody("return {$arrayExpression};");

            return;
        }

        $method->setBody((string) preg_replace(
            '/^return array_filter\((.*)\);$/s',
            'return array_filter($1, static fn (mixed $value): bool => $value !== null);',
            trim($body),
        ));
    }

    private function serializeDtoBodyPayload(ClassType $class): void
    {
        $constructor = $class->getMethods()['__construct'] ?? null;
        $defaultBody = $class->getMethods()['defaultBody'] ?? null;

        if ($constructor === null || $defaultBody === null || ! isset($constructor->getParameters()['payload'])) {
            return;
        }

        $defaultBody->setBody('return PayloadSerializer::serialize($this->payload);');
        $defaultBody->setComment('@return array<string, mixed>');
    }

    private function hasNullableConstructorParameter(ClassType $class): bool
    {
        $constructor = $class->getMethods()['__construct'] ?? null;

        if ($constructor === null) {
            return false;
        }

        foreach ($constructor->getParameters() as $parameter) {
            if ($parameter->isNullable()) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return list<string>
     */
    private function withoutParameterComments(?string $comment, array $parameterNames): array
    {
        $names = implode('|', array_map(fn (string $name): string => preg_quote($name, '/'), $parameterNames));

        return array_values(array_filter(
            explode("\n", $comment ?? ''),
            fn (string $line): bool => ! preg_match('/^@param\s+.+\$(?:'.$names.')(?:\s|$)/', trim($line)),
        ));
    }

    /**
     * @return list<string>
     */
    private function withoutReturnComments(?string $comment): array
    {
        return array_values(array_filter(
            explode("\n", $comment ?? ''),
            fn (string $line): bool => ! str_starts_with(trim($line), '@return '),
        ));
    }

    private function nativeTypeForDocType(string $docType): ?string
    {
        $types = array_values(array_filter(
            explode('|', preg_replace('/<.+>/', '', $docType) ?? $docType),
            fn (string $type): bool => $type !== 'null',
        ));

        return $types === [] ? null : implode('|', $types);
    }

    private function sameNativeType(?string $actual, ?string $expected): bool
    {
        if ($actual === $expected) {
            return true;
        }

        $actualTypes = $this->normalizedUnionTypes($actual);
        $expectedTypes = $this->normalizedUnionTypes($expected);

        return $actualTypes === $expectedTypes;
    }

    /**
     * @return list<string>
     */
    private function normalizedUnionTypes(?string $type): array
    {
        if ($type === null || $type === '') {
            return [];
        }

        $types = array_map(
            fn (string $type): string => ltrim($type, '\\'),
            explode('|', $type),
        );
        sort($types);

        return array_values($types);
    }
}
