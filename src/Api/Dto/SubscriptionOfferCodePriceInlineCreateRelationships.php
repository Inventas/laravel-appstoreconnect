<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodePriceInlineCreateRelationships
 */
class SubscriptionOfferCodePriceInlineCreateRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodePriceInlineCreateRelationshipsTerritory|Optional $territory = new Optional,
        public SubscriptionOfferCodePriceInlineCreateRelationshipsSubscriptionPricePoint|Optional $subscriptionPricePoint = new Optional,
    ) {}
}
