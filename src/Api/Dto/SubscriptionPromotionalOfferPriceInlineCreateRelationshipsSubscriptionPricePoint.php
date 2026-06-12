<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferPriceInlineCreateRelationshipsSubscriptionPricePoint
 */
class SubscriptionPromotionalOfferPriceInlineCreateRelationshipsSubscriptionPricePoint extends SpatieData
{
    public function __construct(
        public SubscriptionPromotionalOfferPriceInlineCreateRelationshipsSubscriptionPricePointData|Optional $data = new Optional,
    ) {}
}
