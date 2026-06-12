<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferPriceRelationships
 */
class SubscriptionPromotionalOfferPriceRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionPromotionalOfferPriceRelationshipsTerritory|Optional $territory = new Optional,
        public SubscriptionPromotionalOfferPriceRelationshipsSubscriptionPricePoint|Optional $subscriptionPricePoint = new Optional,
    ) {}
}
