<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionPromotionalOfferCreateRequestDataRelationships
 */
class SubscriptionPromotionalOfferCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionPromotionalOfferCreateRequestDataRelationshipsSubscription $subscription,
        public SubscriptionPromotionalOfferCreateRequestDataRelationshipsPrices $prices,
    ) {}
}
