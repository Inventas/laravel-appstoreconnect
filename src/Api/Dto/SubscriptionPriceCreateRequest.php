<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionPriceCreateRequest
 */
class SubscriptionPriceCreateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionPriceCreateRequestData $data,
    ) {}
}
