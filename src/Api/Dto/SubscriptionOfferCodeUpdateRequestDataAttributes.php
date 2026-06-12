<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeUpdateRequestDataAttributes
 */
class SubscriptionOfferCodeUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional|null $active = new Optional,
    ) {}
}
