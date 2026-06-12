<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * TerritoryAgeRatingRelationshipsTerritory
 */
class TerritoryAgeRatingRelationshipsTerritory extends SpatieData
{
    public function __construct(
        public TerritoryAgeRatingRelationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
