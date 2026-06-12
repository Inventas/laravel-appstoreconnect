<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOfferRelationships
 */
class SubscriptionIntroductoryOfferRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionIntroductoryOfferRelationshipsSubscription|Optional $subscription = new Optional,
        public SubscriptionIntroductoryOfferRelationshipsTerritory|Optional $territory = new Optional,
        public SubscriptionIntroductoryOfferRelationshipsSubscriptionPricePoint|Optional $subscriptionPricePoint = new Optional,
    ) {}
}
