<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionImageUpdateRequest
 */
class SubscriptionImageUpdateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionImageUpdateRequestData $data,
    ) {}
}
