<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionUpdateRequestDataRelationships
 */
class SubscriptionUpdateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionUpdateRequestDataRelationshipsIntroductoryOffers|Optional $introductoryOffers = new Optional,
        public SubscriptionUpdateRequestDataRelationshipsPromotionalOffers|Optional $promotionalOffers = new Optional,
        public SubscriptionUpdateRequestDataRelationshipsPrices|Optional $prices = new Optional,
    ) {}
}
