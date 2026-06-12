<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceUpdateRequestDataAttributesPlaceDisplayPoint
 */
class AppClipAdvancedExperienceUpdateRequestDataAttributesPlaceDisplayPoint extends SpatieData
{
    public function __construct(
        public AppClipAdvancedExperienceUpdateRequestDataAttributesPlaceDisplayPointCoordinates|Optional $coordinates = new Optional,
        public string|Optional $source = new Optional,
    ) {}
}
