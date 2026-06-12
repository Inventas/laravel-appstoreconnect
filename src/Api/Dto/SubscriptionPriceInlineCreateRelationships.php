<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPriceInlineCreateRelationships
 */
class SubscriptionPriceInlineCreateRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionPriceInlineCreateRelationshipsSubscription|Optional $subscription = new Optional,
        public SubscriptionPriceInlineCreateRelationshipsTerritory|Optional $territory = new Optional,
        public SubscriptionPriceInlineCreateRelationshipsSubscriptionPricePoint|Optional $subscriptionPricePoint = new Optional,
    ) {}
}
