<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPlanAvailability
 */
class SubscriptionPlanAvailability extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionPlanAvailabilityAttributes|Optional $attributes = new Optional,
        public SubscriptionPlanAvailabilityRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
