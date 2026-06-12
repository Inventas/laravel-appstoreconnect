<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPlanAvailabilityUpdateRequestDataAttributes
 */
class SubscriptionPlanAvailabilityUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional|null $availableInNewTerritories = new Optional,
    ) {}
}
