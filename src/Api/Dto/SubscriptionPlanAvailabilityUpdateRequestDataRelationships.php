<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPlanAvailabilityUpdateRequestDataRelationships
 */
class SubscriptionPlanAvailabilityUpdateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionPlanAvailabilityUpdateRequestDataRelationshipsAvailableTerritories|Optional $availableTerritories = new Optional,
    ) {}
}
