<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPlanAvailabilityUpdateRequestData
 */
class SubscriptionPlanAvailabilityUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionPlanAvailabilityUpdateRequestDataAttributes|Optional $attributes = new Optional,
        public SubscriptionPlanAvailabilityUpdateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
