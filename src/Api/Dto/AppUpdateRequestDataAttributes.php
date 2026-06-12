<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppUpdateRequestDataAttributes
 */
class AppUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $accessibilityUrl = new Optional,
        public string|Optional|null $bundleId = new Optional,
        public string|Optional|null $primaryLocale = new Optional,
        public string|Optional|null $subscriptionStatusUrl = new Optional,
        public SubscriptionStatusUrlVersion|Optional $subscriptionStatusUrlVersion = new Optional,
        public string|Optional|null $subscriptionStatusUrlForSandbox = new Optional,
        public SubscriptionStatusUrlVersion|Optional $subscriptionStatusUrlVersionForSandbox = new Optional,
        public string|Optional|null $contentRightsDeclaration = new Optional,
        public bool|Optional|null $streamlinedPurchasingEnabled = new Optional,
    ) {}
}
