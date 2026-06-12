<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * TerritoryAgeRating
 */
class TerritoryAgeRating extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public TerritoryAgeRatingAttributes|Optional $attributes = new Optional,
        public TerritoryAgeRatingRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
