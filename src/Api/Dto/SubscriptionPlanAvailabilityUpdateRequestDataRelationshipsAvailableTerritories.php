<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPlanAvailabilityUpdateRequestDataRelationshipsAvailableTerritories
 */
class SubscriptionPlanAvailabilityUpdateRequestDataRelationshipsAvailableTerritories extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPlanAvailabilityUpdateRequestDataRelationshipsAvailableTerritoriesDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionPlanAvailabilityUpdateRequestDataRelationshipsAvailableTerritoriesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
