<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOfferUpdateRequestDataAttributes
 */
class SubscriptionIntroductoryOfferUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $endDate = new Optional,
    ) {}
}
