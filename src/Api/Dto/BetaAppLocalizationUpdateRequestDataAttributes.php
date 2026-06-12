<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppLocalizationUpdateRequestDataAttributes
 */
class BetaAppLocalizationUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $feedbackEmail = new Optional,
        public string|Optional|null $marketingUrl = new Optional,
        public string|Optional|null $privacyPolicyUrl = new Optional,
        public string|Optional|null $tvOsPrivacyPolicy = new Optional,
        public string|Optional|null $description = new Optional,
    ) {}
}
