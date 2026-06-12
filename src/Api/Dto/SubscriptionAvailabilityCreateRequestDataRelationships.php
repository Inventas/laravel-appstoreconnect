<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionAvailabilityCreateRequestDataRelationships
 */
class SubscriptionAvailabilityCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionAvailabilityCreateRequestDataRelationshipsSubscription $subscription,
        public SubscriptionAvailabilityCreateRequestDataRelationshipsAvailableTerritories $availableTerritories,
    ) {}
}
