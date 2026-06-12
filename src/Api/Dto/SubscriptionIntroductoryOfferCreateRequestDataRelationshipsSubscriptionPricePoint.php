<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOfferCreateRequestDataRelationshipsSubscriptionPricePoint
 */
class SubscriptionIntroductoryOfferCreateRequestDataRelationshipsSubscriptionPricePoint extends SpatieData
{
    public function __construct(
        public SubscriptionIntroductoryOfferCreateRequestDataRelationshipsSubscriptionPricePointData|Optional $data = new Optional,
    ) {}
}
