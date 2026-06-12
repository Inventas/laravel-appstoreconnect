<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodePriceInlineCreateRelationshipsSubscriptionPricePoint
 */
class SubscriptionOfferCodePriceInlineCreateRelationshipsSubscriptionPricePoint extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodePriceInlineCreateRelationshipsSubscriptionPricePointData|Optional $data = new Optional,
    ) {}
}
