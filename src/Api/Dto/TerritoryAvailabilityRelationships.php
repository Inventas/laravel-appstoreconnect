<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * TerritoryAvailabilityRelationships
 */
class TerritoryAvailabilityRelationships extends SpatieData
{
    public function __construct(
        public TerritoryAvailabilityRelationshipsTerritory|Optional $territory = new Optional,
    ) {}
}
