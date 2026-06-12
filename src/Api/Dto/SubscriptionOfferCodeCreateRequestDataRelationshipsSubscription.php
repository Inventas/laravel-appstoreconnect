<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionOfferCodeCreateRequestDataRelationshipsSubscription
 */
class SubscriptionOfferCodeCreateRequestDataRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodeCreateRequestDataRelationshipsSubscriptionData $data,
    ) {}
}
