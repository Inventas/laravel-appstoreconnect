<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionGroupCreateRequest
 */
class SubscriptionGroupCreateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionGroupCreateRequestData $data,
    ) {}
}
