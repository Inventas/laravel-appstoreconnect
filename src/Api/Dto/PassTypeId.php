<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PassTypeId
 */
class PassTypeId extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public PassTypeIdAttributes|Optional $attributes = new Optional,
        public PassTypeIdRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
