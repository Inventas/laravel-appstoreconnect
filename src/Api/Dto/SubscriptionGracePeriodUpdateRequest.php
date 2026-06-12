<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionGracePeriodUpdateRequest
 */
class SubscriptionGracePeriodUpdateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionGracePeriodUpdateRequestData $data,
    ) {}
}
