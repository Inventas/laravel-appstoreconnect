<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoAttributes
 */
class AppInfoAttributes extends SpatieData
{
    public function __construct(
        public AppStoreVersionState|Optional $appStoreState = new Optional,
        public string|Optional $state = new Optional,
        public AppStoreAgeRating|Optional $appStoreAgeRating = new Optional,
        public string|Optional $australiaAgeRating = new Optional,
        public BrazilAgeRating|Optional $brazilAgeRating = new Optional,
        public string|Optional $brazilAgeRatingV2 = new Optional,
        public string|Optional $franceAgeRating = new Optional,
        public string|Optional $koreaAgeRating = new Optional,
    ) {}
}
