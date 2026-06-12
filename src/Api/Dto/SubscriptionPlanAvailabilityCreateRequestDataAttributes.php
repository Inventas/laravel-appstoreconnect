<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPlanAvailabilityCreateRequestDataAttributes
 */
class SubscriptionPlanAvailabilityCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public SubscriptionPlanType $planType,
        public bool|Optional|null $availableInNewTerritories = new Optional,
    ) {}
}
