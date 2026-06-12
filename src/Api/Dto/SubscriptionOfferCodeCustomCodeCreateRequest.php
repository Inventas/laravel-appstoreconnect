<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionOfferCodeCustomCodeCreateRequest
 */
class SubscriptionOfferCodeCustomCodeCreateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodeCustomCodeCreateRequestData $data,
    ) {}
}
