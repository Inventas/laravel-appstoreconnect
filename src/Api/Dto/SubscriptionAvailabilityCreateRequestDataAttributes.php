<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionAvailabilityCreateRequestDataAttributes
 */
class SubscriptionAvailabilityCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public bool $availableInNewTerritories,
    ) {}
}
