<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceLocalizationInlineCreateAttributes
 */
class AppClipAdvancedExperienceLocalizationInlineCreateAttributes extends SpatieData
{
    public function __construct(
        public AppClipAdvancedExperienceLanguage|Optional $language = new Optional,
        public string|Optional|null $title = new Optional,
        public string|Optional|null $subtitle = new Optional,
    ) {}
}
