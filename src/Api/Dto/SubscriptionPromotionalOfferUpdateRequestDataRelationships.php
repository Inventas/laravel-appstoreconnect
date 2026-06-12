<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferUpdateRequestDataRelationships
 */
class SubscriptionPromotionalOfferUpdateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionPromotionalOfferUpdateRequestDataRelationshipsPrices|Optional $prices = new Optional,
    ) {}
}
