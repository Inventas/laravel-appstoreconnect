<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceCreateRequestDataAttributesPlaceDisplayPoint
 */
class AppClipAdvancedExperienceCreateRequestDataAttributesPlaceDisplayPoint extends SpatieData
{
    public function __construct(
        public AppClipAdvancedExperienceCreateRequestDataAttributesPlaceDisplayPointCoordinates|Optional $coordinates = new Optional,
        public string|Optional $source = new Optional,
    ) {}
}
