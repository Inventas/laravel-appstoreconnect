<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionAvailability
 */
class SubscriptionAvailability extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionAvailabilityAttributes|Optional $attributes = new Optional,
        public SubscriptionAvailabilityRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
