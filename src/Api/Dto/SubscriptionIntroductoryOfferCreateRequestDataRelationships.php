<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOfferCreateRequestDataRelationships
 */
class SubscriptionIntroductoryOfferCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionIntroductoryOfferCreateRequestDataRelationshipsSubscription $subscription,
        public SubscriptionIntroductoryOfferCreateRequestDataRelationshipsTerritory|Optional $territory = new Optional,
        public SubscriptionIntroductoryOfferCreateRequestDataRelationshipsSubscriptionPricePoint|Optional $subscriptionPricePoint = new Optional,
    ) {}
}
