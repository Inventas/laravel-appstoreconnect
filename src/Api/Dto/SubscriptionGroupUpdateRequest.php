<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionGroupUpdateRequest
 */
class SubscriptionGroupUpdateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionGroupUpdateRequestData $data,
    ) {}
}
