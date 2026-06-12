<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceCreateRequestDataAttributes
 */
class AppClipAdvancedExperienceCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $link,
        public bool $isPoweredBy,
        public AppClipAdvancedExperienceLanguage $defaultLanguage,
        public AppClipAction|Optional $action = new Optional,
        public AppClipAdvancedExperienceCreateRequestDataAttributesPlace|Optional|null $place = new Optional,
        public string|Optional|null $businessCategory = new Optional,
    ) {}
}
