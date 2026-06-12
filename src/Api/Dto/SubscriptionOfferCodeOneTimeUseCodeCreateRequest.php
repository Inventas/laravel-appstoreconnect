<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionOfferCodeOneTimeUseCodeCreateRequest
 */
class SubscriptionOfferCodeOneTimeUseCodeCreateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodeOneTimeUseCodeCreateRequestData $data,
    ) {}
}
