<?php

namespace Inventas\AppStoreConnectKit\CodeGeneration\OpenApi;

use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Helpers\NameHelper;

class OpenApiRequestBodyTypeMap
{
    /**
     * @param  array<string, mixed>  $openApi
     */
    public function __construct(
        private readonly array $openApi,
        private readonly Config $config,
    ) {}

    public static function fromFile(string $path, Config $config): self
    {
        $contents = file_get_contents($path);

        if ($contents === false) {
            throw new \RuntimeException("Unable to read OpenAPI spec: {$path}");
        }

        /** @var array<string, mixed> $openApi */
        $openApi = json_decode($contents, true, flags: JSON_THROW_ON_ERROR);

        return new self($openApi, $config);
    }

    /**
     * @return array{nativeType: string, docType: string, nullable: bool, description: string}|null
     */
    public function get(Endpoint $endpoint): ?array
    {
        $operation = $this->operationFor($endpoint);
        $requestBody = is_array($operation['requestBody'] ?? null)
            ? $operation['requestBody']
            : null;

        if ($requestBody === null) {
            return null;
        }

        $schema = $requestBody['content']['application/json']['schema'] ?? null;

        if (! is_array($schema)) {
            return null;
        }

        $docType = $this->docTypeForSchema($schema);

        return [
            'nativeType' => $this->nativeTypeForDocType($docType),
            'docType' => $docType,
            'nullable' => ($requestBody['required'] ?? false) !== true,
            'description' => (string) ($requestBody['description'] ?? 'Request body'),
        ];
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
     * @param  array<string, mixed>  $schema
     */
    private function docTypeForSchema(array $schema): string
    {
        if (isset($schema['$ref'])) {
            return '\\'.$this->config->namespace.'\\'.$this->config->dtoNamespaceSuffix.'\\'.NameHelper::dtoClassName(basename((string) $schema['$ref']));
        }

        if (isset($schema['oneOf']) || isset($schema['anyOf'])) {
            $types = [];

            foreach (($schema['oneOf'] ?? $schema['anyOf']) as $subSchema) {
                if (is_array($subSchema)) {
                    $types[] = $this->docTypeForSchema($subSchema);
                }
            }

            return implode('|', array_values(array_unique($types)));
        }

        return match ($schema['type'] ?? null) {
            'integer' => 'int',
            'number' => 'int|float',
            'string' => 'string',
            'boolean' => 'bool',
            'array' => 'array',
            'object' => 'array',
            default => 'mixed',
        };
    }

    private function nativeTypeForDocType(string $docType): string
    {
        $types = explode('|', $docType);

        if (count($types) > 1) {
            return 'mixed';
        }

        if (str_starts_with($docType, 'array<')) {
            return 'array';
        }

        return $docType;
    }

    private function normalizedPath(string $path): string
    {
        return trim(str_replace(['{', '}'], [':', ''], $path), '/');
    }
}
