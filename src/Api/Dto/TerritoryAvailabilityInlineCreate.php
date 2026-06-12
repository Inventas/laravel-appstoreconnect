<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * TerritoryAvailabilityInlineCreate
 */
class TerritoryAvailabilityInlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public string|Optional $id = new Optional,
        public TerritoryAvailabilityInlineCreateAttributes|Optional $attributes = new Optional,
        public TerritoryAvailabilityInlineCreateRelationships|Optional $relationships = new Optional,
    ) {}
}
