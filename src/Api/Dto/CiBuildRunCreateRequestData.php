<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunCreateRequestData
 */
class CiBuildRunCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public CiBuildRunCreateRequestDataAttributes|Optional $attributes = new Optional,
        public CiBuildRunCreateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
