<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPricePointAttributes
 */
class SubscriptionPricePointAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $customerPrice = new Optional,
        public string|Optional $proceeds = new Optional,
        public string|Optional $proceedsYear2 = new Optional,
    ) {}
}
