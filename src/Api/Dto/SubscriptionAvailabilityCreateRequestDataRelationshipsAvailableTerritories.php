<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionAvailabilityCreateRequestDataRelationshipsAvailableTerritories
 */
class SubscriptionAvailabilityCreateRequestDataRelationshipsAvailableTerritories extends SpatieData
{
    /**
     * @param  array<int, SubscriptionAvailabilityCreateRequestDataRelationshipsAvailableTerritoriesDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionAvailabilityCreateRequestDataRelationshipsAvailableTerritoriesDataItem> */
        public array $data,
    ) {}
}
