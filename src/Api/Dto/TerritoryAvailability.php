<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * TerritoryAvailability
 */
class TerritoryAvailability extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public TerritoryAvailabilityAttributes|Optional $attributes = new Optional,
        public TerritoryAvailabilityRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
