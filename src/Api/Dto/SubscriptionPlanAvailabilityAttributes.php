<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPlanAvailabilityAttributes
 */
class SubscriptionPlanAvailabilityAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional $availableInNewTerritories = new Optional,
        public SubscriptionPlanType|Optional $planType = new Optional,
    ) {}
}
