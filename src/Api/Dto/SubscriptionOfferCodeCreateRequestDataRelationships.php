<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionOfferCodeCreateRequestDataRelationships
 */
class SubscriptionOfferCodeCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodeCreateRequestDataRelationshipsSubscription $subscription,
        public SubscriptionOfferCodeCreateRequestDataRelationshipsPrices $prices,
    ) {}
}
