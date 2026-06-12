<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionImageCreateRequest
 */
class SubscriptionImageCreateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionImageCreateRequestData $data,
    ) {}
}
