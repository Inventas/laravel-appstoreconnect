<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionCreateRequest
 */
class SubscriptionCreateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionCreateRequestData $data,
    ) {}
}
