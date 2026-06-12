<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferRelationships
 */
class SubscriptionPromotionalOfferRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionPromotionalOfferRelationshipsSubscription|Optional $subscription = new Optional,
        public SubscriptionPromotionalOfferRelationshipsPrices|Optional $prices = new Optional,
    ) {}
}
