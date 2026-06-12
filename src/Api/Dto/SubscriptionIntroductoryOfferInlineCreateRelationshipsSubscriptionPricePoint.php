<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOfferInlineCreateRelationshipsSubscriptionPricePoint
 */
class SubscriptionIntroductoryOfferInlineCreateRelationshipsSubscriptionPricePoint extends SpatieData
{
    public function __construct(
        public SubscriptionIntroductoryOfferInlineCreateRelationshipsSubscriptionPricePointData|Optional $data = new Optional,
    ) {}
}
