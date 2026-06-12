<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOfferRelationshipsSubscriptionPricePoint
 */
class SubscriptionIntroductoryOfferRelationshipsSubscriptionPricePoint extends SpatieData
{
    public function __construct(
        public SubscriptionIntroductoryOfferRelationshipsSubscriptionPricePointData|Optional $data = new Optional,
    ) {}
}
