<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionAvailabilityCreateRequestDataRelationshipsSubscription
 */
class SubscriptionAvailabilityCreateRequestDataRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public SubscriptionAvailabilityCreateRequestDataRelationshipsSubscriptionData $data,
    ) {}
}
