<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoLocalizationAttributes
 */
class AppInfoLocalizationAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $locale = new Optional,
        public string|Optional $name = new Optional,
        public string|Optional $subtitle = new Optional,
        public string|Optional $privacyPolicyUrl = new Optional,
        public string|Optional $privacyChoicesUrl = new Optional,
        public string|Optional $privacyPolicyText = new Optional,
    ) {}
}
