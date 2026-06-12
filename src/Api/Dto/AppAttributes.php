<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAttributes
 */
class AppAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $accessibilityUrl = new Optional,
        public string|Optional $name = new Optional,
        public string|Optional $bundleId = new Optional,
        public string|Optional $sku = new Optional,
        public string|Optional $primaryLocale = new Optional,
        public bool|Optional $isOrEverWasMadeForKids = new Optional,
        public string|Optional $subscriptionStatusUrl = new Optional,
        public SubscriptionStatusUrlVersion|Optional $subscriptionStatusUrlVersion = new Optional,
        public string|Optional $subscriptionStatusUrlForSandbox = new Optional,
        public SubscriptionStatusUrlVersion|Optional $subscriptionStatusUrlVersionForSandbox = new Optional,
        public string|Optional $contentRightsDeclaration = new Optional,
        public bool|Optional $streamlinedPurchasingEnabled = new Optional,
    ) {}
}
