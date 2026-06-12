<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPlanAvailabilityRelationships
 */
class SubscriptionPlanAvailabilityRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionPlanAvailabilityRelationshipsAvailableTerritories|Optional $availableTerritories = new Optional,
    ) {}
}
