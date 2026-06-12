<?php

namespace Inventas\AppStoreConnectKit\CodeGeneration\OpenApi;

use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Helpers\NameHelper;

class OpenApiParameterDocTypeMap
{
    /** @var array<string, string> */
    private array $types = [];

    /**
     * @param  array<string, mixed>  $openApi
     */
    public function __construct(
        private readonly array $openApi,
        private readonly Config $config,
        private readonly ?OpenApiRequestBodyTypeMap $requestBodyTypes = null,
    ) {}

    public static function fromFile(string $path, Config $config, ApiSpecification $specification, ?OpenApiRequestBodyTypeMap $requestBodyTypes = null): self
    {
        $contents = file_get_contents($path);

        if ($contents === false) {
            throw new \RuntimeException("Unable to read OpenAPI spec: {$path}");
        }

        /** @var array<string, mixed> $openApi */
        $openApi = json_decode($contents, true, flags: JSON_THROW_ON_ERROR);
        $map = new self($openApi, $config, $requestBodyTypes);
        $map->index($specification);

        return $map;
    }

    public function get(string $className, string $methodName, string $parameterName): ?string
    {
        return $this->types[$this->key($className, $methodName, $parameterName)] ?? null;
    }

    private function index(ApiSpecification $specification): void
    {
        foreach ($specification->endpoints as $endpoint) {
            $operation = $this->operationFor($endpoint);

            if ($operation === null) {
                continue;
            }

            $resourceName = NameHelper::resourceClassName($endpoint->collection ?: $this->config->fallbackResourceName);
            $pathBasedName = NameHelper::pathBasedName($endpoint);
            $requestClassName = NameHelper::requestClassName($endpoint->name ?: $pathBasedName);
            $resourceMethodName = NameHelper::safeVariableName(NameHelper::resourceClassName($endpoint->name ?: $pathBasedName));

            $requestClass = "{$this->config->namespace}\\{$this->config->requestNamespaceSuffix}\\{$resourceName}\\{$requestClassName}";
            $resourceClass = "{$this->config->namespace}\\{$this->config->resourceNamespaceSuffix}\\{$resourceName}";

            $requestBody = $this->requestBodyTypes?->get($endpoint);

            if ($requestBody !== null) {
                $docType = $requestBody['nullable'] ? "{$requestBody['docType']}|null" : $requestBody['docType'];

                $this->types[$this->key($requestClass, '__construct', 'payload')] = $docType;
                $this->types[$this->key($resourceClass, $resourceMethodName, 'payload')] = $docType;
            }

            foreach (['path', 'query', 'header'] as $in) {
                foreach ($this->operationParameters($endpoint, $operation, $in) as $parameter) {
                    $schema = $this->schemaForParameter($parameter);
                    $name = NameHelper::safeVariableName((string) $parameter['name']);
                    $docType = $this->docTypeForSchema($schema);
                    $nullableDocType = (($parameter['required'] ?? false) === true) ? $docType : "{$docType}|null";

                    $this->types[$this->key($requestClass, '__construct', $name)] = $nullableDocType;
                    $this->types[$this->key($resourceClass, $resourceMethodName, $name)] = $nullableDocType;
                }
            }
        }
    }

    /**
     * @return array<string, mixed>|null
     */
    private function operationFor(Endpoint $endpoint): ?array
    {
        foreach (($this->openApi['paths'] ?? []) as $path => $pathItem) {
            if ($this->normalizedPath((string) $path) !== $endpoint->pathAsString()) {
                continue;
            }

            $operation = $pathItem[strtolower($endpoint->method->value)] ?? null;

            return is_array($operation) ? $operation : null;
        }

        return null;
    }

    /**
     * @param  array<string, mixed>  $operation
     * @return list<array<string, mixed>>
     */
    private function operationParameters(Endpoint $endpoint, array $operation, string $in): array
    {
        $pathItem = $this->pathItemFor($endpoint);
        $parameters = [];

        if (is_array($pathItem)) {
            $parameters = array_merge($parameters, $pathItem['parameters'] ?? []);
        }

        $parameters = array_merge($parameters, $operation['parameters'] ?? []);

        return array_values(array_filter(array_map(
            fn (array $parameter): ?array => $this->resolveParameter($parameter),
            $parameters,
        ), fn (?array $parameter): bool => ($parameter['in'] ?? null) === $in));
    }

    /**
     * @return array<string, mixed>|null
     */
    private function pathItemFor(Endpoint $endpoint): ?array
    {
        foreach (($this->openApi['paths'] ?? []) as $path => $pathItem) {
            if ($this->normalizedPath((string) $path) === $endpoint->pathAsString() && is_array($pathItem)) {
                return $pathItem;
            }
        }

        return null;
    }

    /**
     * @param  array<string, mixed>  $parameter
     * @return array<string, mixed>|null
     */
    private function resolveParameter(array $parameter): ?array
    {
        if (! isset($parameter['$ref'])) {
            return $parameter;
        }

        $name = basename((string) $parameter['$ref']);
        $resolved = $this->openApi['components']['parameters'][$name] ?? null;

        return is_array($resolved) ? $resolved : null;
    }

    /**
     * @param  array<string, mixed>  $parameter
     * @return array<string, mixed>
     */
    private function schemaForParameter(array $parameter): array
    {
        return is_array($parameter['schema'] ?? null) ? $parameter['schema'] : [];
    }

    /**
     * @param  array<string, mixed>  $schema
     */
    private function docTypeForSchema(array $schema): string
    {
        if (isset($schema['$ref'])) {
            return NameHelper::dtoClassName(basename((string) $schema['$ref']));
        }

        if (isset($schema['oneOf']) || isset($schema['anyOf'])) {
            $types = [];

            foreach (($schema['oneOf'] ?? $schema['anyOf']) as $subSchema) {
                $types[] = $this->docTypeForSchema($subSchema);
            }

            return implode('|', array_values(array_unique($types)));
        }

        return match ($schema['type'] ?? null) {
            'integer' => 'int',
            'number' => 'int|float',
            'string' => 'string',
            'boolean' => 'bool',
            'array' => 'array<int, '.$this->docTypeForSchema(is_array($schema['items'] ?? null) ? $schema['items'] : []).'>',
            'object' => $this->objectDocType($schema),
            default => 'mixed',
        };
    }

    /**
     * @param  array<string, mixed>  $schema
     */
    private function objectDocType(array $schema): string
    {
        if (is_array($schema['additionalProperties'] ?? null)) {
            return 'array<string, '.$this->docTypeForSchema($schema['additionalProperties']).'>';
        }

        return 'array<string, mixed>';
    }

    private function normalizedPath(string $path): string
    {
        return trim(str_replace(['{', '}'], [':', ''], $path), '/');
    }

    private function key(string $className, string $methodName, string $parameterName): string
    {
        return "{$className}::{$methodName}::{$parameterName}";
    }
}
