<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoLocalizationCreateRequestDataAttributes
 */
class AppInfoLocalizationCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $locale,
        public string $name,
        public string|Optional|null $subtitle = new Optional,
        public string|Optional|null $privacyPolicyUrl = new Optional,
        public string|Optional|null $privacyChoicesUrl = new Optional,
        public string|Optional|null $privacyPolicyText = new Optional,
    ) {}
}
