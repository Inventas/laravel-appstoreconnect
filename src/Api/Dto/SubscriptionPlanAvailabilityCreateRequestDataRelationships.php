<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionPlanAvailabilityCreateRequestDataRelationships
 */
class SubscriptionPlanAvailabilityCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionPlanAvailabilityCreateRequestDataRelationshipsAvailableTerritories $availableTerritories,
        public SubscriptionPlanAvailabilityCreateRequestDataRelationshipsSubscription $subscription,
    ) {}
}
