<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOfferAttributes
 */
class SubscriptionIntroductoryOfferAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $startDate = new Optional,
        public string|Optional $endDate = new Optional,
        public SubscriptionOfferDuration|Optional $duration = new Optional,
        public SubscriptionOfferMode|Optional $offerMode = new Optional,
        public int|Optional $numberOfPeriods = new Optional,
        public SubscriptionPlanType|Optional $targetSubscriptionPlanType = new Optional,
    ) {}
}
