<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * TerritoryAgeRatingRelationships
 */
class TerritoryAgeRatingRelationships extends SpatieData
{
    public function __construct(
        public TerritoryAgeRatingRelationshipsTerritory|Optional $territory = new Optional,
    ) {}
}
