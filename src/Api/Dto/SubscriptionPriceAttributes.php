<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPriceAttributes
 */
class SubscriptionPriceAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $startDate = new Optional,
        public bool|Optional $preserved = new Optional,
        public SubscriptionPlanType|Optional $planType = new Optional,
    ) {}
}
