<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionOfferCodeOneTimeUseCodeUpdateRequest
 */
class SubscriptionOfferCodeOneTimeUseCodeUpdateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodeOneTimeUseCodeUpdateRequestData $data,
    ) {}
}
