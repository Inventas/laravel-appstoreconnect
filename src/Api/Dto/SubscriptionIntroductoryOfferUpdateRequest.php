<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionIntroductoryOfferUpdateRequest
 */
class SubscriptionIntroductoryOfferUpdateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionIntroductoryOfferUpdateRequestData $data,
    ) {}
}
