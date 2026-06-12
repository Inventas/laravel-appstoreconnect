<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionIntroductoryOfferCreateRequestDataRelationshipsSubscription
 */
class SubscriptionIntroductoryOfferCreateRequestDataRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public SubscriptionIntroductoryOfferCreateRequestDataRelationshipsSubscriptionData $data,
    ) {}
}
