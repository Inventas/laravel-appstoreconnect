<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionPlanAvailabilityCreateRequest
 */
class SubscriptionPlanAvailabilityCreateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionPlanAvailabilityCreateRequestData $data,
    ) {}
}
