<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionPlanAvailabilityCreateRequestDataRelationshipsAvailableTerritories
 */
class SubscriptionPlanAvailabilityCreateRequestDataRelationshipsAvailableTerritories extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPlanAvailabilityCreateRequestDataRelationshipsAvailableTerritoriesDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionPlanAvailabilityCreateRequestDataRelationshipsAvailableTerritoriesDataItem> */
        public array $data,
    ) {}
}
