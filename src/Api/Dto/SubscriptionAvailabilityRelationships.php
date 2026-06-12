<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionAvailabilityRelationships
 */
class SubscriptionAvailabilityRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionAvailabilityRelationshipsAvailableTerritories|Optional $availableTerritories = new Optional,
    ) {}
}
