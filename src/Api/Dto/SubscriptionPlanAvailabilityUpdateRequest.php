<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionPlanAvailabilityUpdateRequest
 */
class SubscriptionPlanAvailabilityUpdateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionPlanAvailabilityUpdateRequestData $data,
    ) {}
}
