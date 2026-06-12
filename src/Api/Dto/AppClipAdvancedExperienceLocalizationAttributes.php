<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceLocalizationAttributes
 */
class AppClipAdvancedExperienceLocalizationAttributes extends SpatieData
{
    public function __construct(
        public AppClipAdvancedExperienceLanguage|Optional $language = new Optional,
        public string|Optional $title = new Optional,
        public string|Optional $subtitle = new Optional,
    ) {}
}
