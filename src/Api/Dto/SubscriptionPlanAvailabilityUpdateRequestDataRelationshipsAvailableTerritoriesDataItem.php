<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionPlanAvailabilityUpdateRequestDataRelationshipsAvailableTerritoriesDataItem
 */
class SubscriptionPlanAvailabilityUpdateRequestDataRelationshipsAvailableTerritoriesDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
