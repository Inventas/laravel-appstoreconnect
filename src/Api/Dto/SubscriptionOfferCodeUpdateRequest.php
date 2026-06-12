<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionOfferCodeUpdateRequest
 */
class SubscriptionOfferCodeUpdateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodeUpdateRequestData $data,
    ) {}
}
