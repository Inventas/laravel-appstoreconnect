<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * TerritoryAvailabilityRelationshipsTerritory
 */
class TerritoryAvailabilityRelationshipsTerritory extends SpatieData
{
    public function __construct(
        public TerritoryAvailabilityRelationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
