<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOfferRelationshipsSubscription
 */
class SubscriptionIntroductoryOfferRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public SubscriptionIntroductoryOfferRelationshipsSubscriptionData|Optional $data = new Optional,
    ) {}
}
