<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionOfferCodeCustomCodeUpdateRequest
 */
class SubscriptionOfferCodeCustomCodeUpdateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodeCustomCodeUpdateRequestData $data,
    ) {}
}
