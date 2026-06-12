<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceAttributesPlaceMainAddress
 */
class AppClipAdvancedExperienceAttributesPlaceMainAddress extends SpatieData
{
    public function __construct(
        public string|Optional $fullAddress = new Optional,
        public AppClipAdvancedExperienceAttributesPlaceMainAddressStructuredAddress|Optional $structuredAddress = new Optional,
    ) {}
}
