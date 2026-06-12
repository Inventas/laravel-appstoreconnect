<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPriceCreateRequestDataAttributes
 */
class SubscriptionPriceCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $startDate = new Optional,
        public bool|Optional|null $preserveCurrentPrice = new Optional,
        public SubscriptionPlanType|Optional $planType = new Optional,
    ) {}
}
