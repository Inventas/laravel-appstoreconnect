<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppLocalizationAttributes
 */
class BetaAppLocalizationAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $feedbackEmail = new Optional,
        public string|Optional $marketingUrl = new Optional,
        public string|Optional $privacyPolicyUrl = new Optional,
        public string|Optional $tvOsPrivacyPolicy = new Optional,
        public string|Optional $description = new Optional,
        public string|Optional $locale = new Optional,
    ) {}
}
