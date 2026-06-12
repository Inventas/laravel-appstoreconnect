<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionPlanAvailabilityCreateRequestDataRelationshipsSubscription
 */
class SubscriptionPlanAvailabilityCreateRequestDataRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public SubscriptionPlanAvailabilityCreateRequestDataRelationshipsSubscriptionData $data,
    ) {}
}
