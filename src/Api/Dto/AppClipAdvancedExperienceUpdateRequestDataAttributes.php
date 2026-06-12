<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceUpdateRequestDataAttributes
 */
class AppClipAdvancedExperienceUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public AppClipAction|Optional $action = new Optional,
        public bool|Optional|null $isPoweredBy = new Optional,
        public AppClipAdvancedExperienceUpdateRequestDataAttributesPlace|Optional|null $place = new Optional,
        public string|Optional|null $businessCategory = new Optional,
        public AppClipAdvancedExperienceLanguage|Optional $defaultLanguage = new Optional,
        public bool|Optional|null $removed = new Optional,
    ) {}
}
