<?php

namespace Inventas\AppStoreConnectKit\CodeGeneration\OpenApi;

use cebe\openapi\spec\Reference;
use cebe\openapi\spec\Schema;
use Crescat\SaloonSdkGenerator\Helpers\NameHelper;
use Illuminate\Support\Str;

class OpenApiTypeResolver
{
    /**
     * @param  array<string, Schema|Reference>  $schemas
     */
    public function __construct(
        private readonly array $schemas = [],
    ) {}

    public function resolve(Schema|Reference $schema, string $contextClass, string $propertyName): ResolvedType
    {
        return $this->resolveSchema($schema, $contextClass, $propertyName);
    }

    private function resolveSchema(Schema|Reference $schema, string $contextClass, string $propertyName): ResolvedType
    {
        if ($schema instanceof Reference) {
            $className = $this->referenceClassName($schema);
            $referencedSchema = $this->schemas[$className] ?? null;

            if ($referencedSchema instanceof Schema && $this->isEnumSchema($referencedSchema)) {
                return new ResolvedType($className, $className);
            }

            if ($referencedSchema instanceof Schema && ! $this->isDtoSchema($referencedSchema)) {
                return $this->resolveSchema($referencedSchema, $contextClass, $propertyName);
            }

            if ($referencedSchema instanceof Reference) {
                return $this->resolveSchema($referencedSchema, $contextClass, $propertyName);
            }

            return new ResolvedType($className, $className);
        }

        if (isset($schema->oneOf) || isset($schema->anyOf)) {
            return $this->resolveUnion($schema, $contextClass, $propertyName);
        }

        if (isset($schema->allOf)) {
            return new ResolvedType('mixed', $this->unionDocType($schema->allOf, $contextClass, $propertyName));
        }

        return match ($schema->type) {
            'integer' => new ResolvedType('int', 'int'),
            'number' => new ResolvedType('int|float', 'int|float'),
            'string' => new ResolvedType('string', 'string'),
            'boolean' => new ResolvedType('bool', 'bool'),
            'array' => $this->resolveArray($schema, $contextClass, $propertyName),
            'object' => $this->resolveObject($schema, $contextClass, $propertyName),
            'null' => new ResolvedType('mixed', 'null'),
            default => new ResolvedType('mixed', 'mixed'),
        };
    }

    private function resolveArray(Schema $schema, string $contextClass, string $propertyName): ResolvedType
    {
        if (! $schema->items instanceof Schema && ! $schema->items instanceof Reference) {
            return new ResolvedType('array', 'array<int, mixed>');
        }

        $itemType = $this->resolveArrayItem($schema->items, $contextClass, $propertyName);

        return new ResolvedType(
            nativeType: 'array',
            docType: "array<int, {$itemType->docType}>",
            nestedSchemas: $itemType->nestedSchemas,
        );
    }

    private function resolveArrayItem(Schema|Reference $schema, string $contextClass, string $propertyName): ResolvedType
    {
        if ($schema instanceof Schema && (isset($schema->oneOf) || isset($schema->anyOf))) {
            return $this->resolveUnion($schema, $contextClass, $propertyName);
        }

        if ($schema instanceof Schema && $schema->type === 'object' && ! empty($schema->properties)) {
            $className = $this->nestedClassName($contextClass, "{$propertyName}Item");

            return new ResolvedType(
                nativeType: $className,
                docType: $className,
                nestedSchemas: [$className => $schema],
            );
        }

        return $this->resolveSchema($schema, $contextClass, $propertyName);
    }

    private function resolveObject(Schema $schema, string $contextClass, string $propertyName): ResolvedType
    {
        if (! empty($schema->properties)) {
            $className = $this->nestedClassName($contextClass, $propertyName);

            return new ResolvedType(
                nativeType: $className,
                docType: $className,
                nestedSchemas: [$className => $schema],
            );
        }

        if ($schema->additionalProperties instanceof Schema || $schema->additionalProperties instanceof Reference) {
            $valueType = $this->resolveSchema($schema->additionalProperties, $contextClass, "{$propertyName}Value");

            return new ResolvedType(
                nativeType: 'array',
                docType: "array<string, {$valueType->docType}>",
                nestedSchemas: $valueType->nestedSchemas,
            );
        }

        return new ResolvedType('array', 'array<string, mixed>');
    }

    /**
     * @param  array<int, Schema|Reference>  $schemas
     */
    private function unionDocType(array $schemas, string $contextClass, string $propertyName): string
    {
        $types = [];

        foreach ($schemas as $index => $schema) {
            $resolved = $this->resolveSchema($schema, $contextClass, "{$propertyName}{$index}");
            $types[] = $resolved->docType;
        }

        $types = array_values(array_unique($types));

        return $types === [] ? 'mixed' : implode('|', $types);
    }

    private function resolveUnion(Schema $schema, string $contextClass, string $propertyName): ResolvedType
    {
        $types = [];
        $nestedSchemas = [];

        $schemas = isset($schema->oneOf) ? $schema->oneOf : $schema->anyOf;

        foreach ($schemas as $index => $subSchema) {
            $resolved = $this->resolveSchema($subSchema, $contextClass, "{$propertyName}{$index}");
            $types[] = $resolved->docType;
            $nestedSchemas = array_merge($nestedSchemas, $resolved->nestedSchemas);
        }

        $types = array_values(array_unique($types));
        $docType = $types === [] ? 'mixed' : implode('|', $types);

        return new ResolvedType($this->nativeUnionType($docType), $docType, $nestedSchemas);
    }

    private function nativeUnionType(string $docType): string
    {
        $types = explode('|', $docType);

        foreach ($types as $type) {
            if (str_starts_with($type, 'array<')) {
                return 'mixed';
            }
        }

        return implode('|', $types);
    }

    private function referenceClassName(Reference $reference): string
    {
        return NameHelper::dtoClassName(Str::afterLast($reference->getReference(), '/'));
    }

    public function isDtoSchema(Schema|Reference $schema): bool
    {
        if ($schema instanceof Reference) {
            $referencedSchema = $this->schemas[$this->referenceClassName($schema)] ?? null;

            return $referencedSchema instanceof Schema
                ? $this->isDtoSchema($referencedSchema)
                : true;
        }

        return ! empty($schema->properties);
    }

    public function isEnumSchema(Schema|Reference $schema): bool
    {
        if ($schema instanceof Reference) {
            $referencedSchema = $this->schemas[$this->referenceClassName($schema)] ?? null;

            return $referencedSchema instanceof Schema && $this->isEnumSchema($referencedSchema);
        }

        return OpenApiStringEnum::isSchema($schema);
    }

    private function nestedClassName(string $contextClass, string $propertyName): string
    {
        return NameHelper::dtoClassName($contextClass.Str::studly($propertyName));
    }
}
