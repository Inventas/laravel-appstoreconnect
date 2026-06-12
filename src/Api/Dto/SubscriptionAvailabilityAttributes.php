<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionAvailabilityAttributes
 */
class SubscriptionAvailabilityAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional $availableInNewTerritories = new Optional,
    ) {}
}
