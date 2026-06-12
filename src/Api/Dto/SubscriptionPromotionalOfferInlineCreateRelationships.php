<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferInlineCreateRelationships
 */
class SubscriptionPromotionalOfferInlineCreateRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionPromotionalOfferInlineCreateRelationshipsSubscription|Optional $subscription = new Optional,
        public SubscriptionPromotionalOfferInlineCreateRelationshipsPrices|Optional $prices = new Optional,
    ) {}
}
