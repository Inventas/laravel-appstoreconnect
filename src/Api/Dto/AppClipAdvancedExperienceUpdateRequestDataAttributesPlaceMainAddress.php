<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceUpdateRequestDataAttributesPlaceMainAddress
 */
class AppClipAdvancedExperienceUpdateRequestDataAttributesPlaceMainAddress extends SpatieData
{
    public function __construct(
        public string|Optional $fullAddress = new Optional,
        public AppClipAdvancedExperienceUpdateRequestDataAttributesPlaceMainAddressStructuredAddress|Optional $structuredAddress = new Optional,
    ) {}
}
