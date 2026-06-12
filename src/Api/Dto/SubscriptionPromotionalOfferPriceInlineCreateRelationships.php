<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferPriceInlineCreateRelationships
 */
class SubscriptionPromotionalOfferPriceInlineCreateRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionPromotionalOfferPriceInlineCreateRelationshipsTerritory|Optional $territory = new Optional,
        public SubscriptionPromotionalOfferPriceInlineCreateRelationshipsSubscriptionPricePoint|Optional $subscriptionPricePoint = new Optional,
    ) {}
}
