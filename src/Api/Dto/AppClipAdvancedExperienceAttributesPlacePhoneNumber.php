<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceAttributesPlacePhoneNumber
 */
class AppClipAdvancedExperienceAttributesPlacePhoneNumber extends SpatieData
{
    public function __construct(
        public string|Optional $number = new Optional,
        public string|Optional $type = new Optional,
        public string|Optional $intent = new Optional,
    ) {}
}
