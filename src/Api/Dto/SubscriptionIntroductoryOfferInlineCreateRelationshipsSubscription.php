<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOfferInlineCreateRelationshipsSubscription
 */
class SubscriptionIntroductoryOfferInlineCreateRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public SubscriptionIntroductoryOfferInlineCreateRelationshipsSubscriptionData|Optional $data = new Optional,
    ) {}
}
