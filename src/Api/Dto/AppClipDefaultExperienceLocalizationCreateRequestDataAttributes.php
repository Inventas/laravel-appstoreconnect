<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceLocalizationCreateRequestDataAttributes
 */
class AppClipDefaultExperienceLocalizationCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $locale,
        public string|Optional|null $subtitle = new Optional,
    ) {}
}
