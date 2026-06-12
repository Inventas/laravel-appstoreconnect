<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * TerritoryAvailabilityInlineCreateRelationshipsTerritory
 */
class TerritoryAvailabilityInlineCreateRelationshipsTerritory extends SpatieData
{
    public function __construct(
        public TerritoryAvailabilityInlineCreateRelationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
