<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOfferInlineCreateRelationships
 */
class SubscriptionIntroductoryOfferInlineCreateRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionIntroductoryOfferInlineCreateRelationshipsSubscription|Optional $subscription = new Optional,
        public SubscriptionIntroductoryOfferInlineCreateRelationshipsTerritory|Optional $territory = new Optional,
        public SubscriptionIntroductoryOfferInlineCreateRelationshipsSubscriptionPricePoint|Optional $subscriptionPricePoint = new Optional,
    ) {}
}
