<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionAvailabilityCreateRequest
 */
class SubscriptionAvailabilityCreateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionAvailabilityCreateRequestData $data,
    ) {}
}
