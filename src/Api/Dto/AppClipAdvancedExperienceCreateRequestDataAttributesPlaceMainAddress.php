<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceCreateRequestDataAttributesPlaceMainAddress
 */
class AppClipAdvancedExperienceCreateRequestDataAttributesPlaceMainAddress extends SpatieData
{
    public function __construct(
        public string|Optional $fullAddress = new Optional,
        public AppClipAdvancedExperienceCreateRequestDataAttributesPlaceMainAddressStructuredAddress|Optional $structuredAddress = new Optional,
    ) {}
}
