<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * TerritoryAgeRatingAttributes
 */
class TerritoryAgeRatingAttributes extends SpatieData
{
    public function __construct(
        public AppStoreAgeRating|Optional $appStoreAgeRating = new Optional,
    ) {}
}
