<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodePriceRelationships
 */
class SubscriptionOfferCodePriceRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodePriceRelationshipsTerritory|Optional $territory = new Optional,
        public SubscriptionOfferCodePriceRelationshipsSubscriptionPricePoint|Optional $subscriptionPricePoint = new Optional,
    ) {}
}
