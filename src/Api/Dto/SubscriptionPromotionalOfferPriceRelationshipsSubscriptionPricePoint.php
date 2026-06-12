<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferPriceRelationshipsSubscriptionPricePoint
 */
class SubscriptionPromotionalOfferPriceRelationshipsSubscriptionPricePoint extends SpatieData
{
    public function __construct(
        public SubscriptionPromotionalOfferPriceRelationshipsSubscriptionPricePointData|Optional $data = new Optional,
    ) {}
}
