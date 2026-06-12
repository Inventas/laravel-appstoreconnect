<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionPlanAvailabilityCreateRequestData
 */
class SubscriptionPlanAvailabilityCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public SubscriptionPlanAvailabilityCreateRequestDataAttributes $attributes,
        public SubscriptionPlanAvailabilityCreateRequestDataRelationships $relationships,
    ) {}
}
