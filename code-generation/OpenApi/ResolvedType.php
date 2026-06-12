<?php

namespace Inventas\AppStoreConnectKit\CodeGeneration\OpenApi;

use cebe\openapi\spec\Schema;

class ResolvedType
{
    /**
     * @param  array<string, Schema>  $nestedSchemas
     */
    public function __construct(
        public readonly string $nativeType,
        public readonly string $docType,
        public readonly array $nestedSchemas = [],
    ) {}

    public function nullableDocType(): string
    {
        return str_contains($this->docType, 'null')
            ? $this->docType
            : "{$this->docType}|null";
    }
}
