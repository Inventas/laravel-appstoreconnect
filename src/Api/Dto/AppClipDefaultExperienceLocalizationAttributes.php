<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceLocalizationAttributes
 */
class AppClipDefaultExperienceLocalizationAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $locale = new Optional,
        public string|Optional $subtitle = new Optional,
    ) {}
}
