<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPriceCreateRequestDataRelationships
 */
class SubscriptionPriceCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionPriceCreateRequestDataRelationshipsSubscription $subscription,
        public SubscriptionPriceCreateRequestDataRelationshipsSubscriptionPricePoint $subscriptionPricePoint,
        public SubscriptionPriceCreateRequestDataRelationshipsTerritory|Optional $territory = new Optional,
    ) {}
}
