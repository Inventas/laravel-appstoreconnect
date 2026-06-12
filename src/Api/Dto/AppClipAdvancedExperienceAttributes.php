<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceAttributes
 */
class AppClipAdvancedExperienceAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $link = new Optional,
        public int|Optional $version = new Optional,
        public string|Optional $status = new Optional,
        public AppClipAction|Optional $action = new Optional,
        public bool|Optional $isPoweredBy = new Optional,
        public AppClipAdvancedExperienceAttributesPlace|Optional $place = new Optional,
        public string|Optional $placeStatus = new Optional,
        public string|Optional $businessCategory = new Optional,
        public AppClipAdvancedExperienceLanguage|Optional $defaultLanguage = new Optional,
    ) {}
}
