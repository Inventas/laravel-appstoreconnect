<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceAttributesPlaceDisplayPoint
 */
class AppClipAdvancedExperienceAttributesPlaceDisplayPoint extends SpatieData
{
    public function __construct(
        public AppClipAdvancedExperienceAttributesPlaceDisplayPointCoordinates|Optional $coordinates = new Optional,
        public string|Optional $source = new Optional,
    ) {}
}
