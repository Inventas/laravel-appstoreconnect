<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionAvailabilityCreateRequestData
 */
class SubscriptionAvailabilityCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public SubscriptionAvailabilityCreateRequestDataAttributes $attributes,
        public SubscriptionAvailabilityCreateRequestDataRelationships $relationships,
    ) {}
}
