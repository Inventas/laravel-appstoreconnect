<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOfferInlineCreateAttributes
 */
class SubscriptionIntroductoryOfferInlineCreateAttributes extends SpatieData
{
    public function __construct(
        public SubscriptionOfferDuration $duration,
        public SubscriptionOfferMode $offerMode,
        public int $numberOfPeriods,
        public string|Optional|null $startDate = new Optional,
        public string|Optional|null $endDate = new Optional,
        public SubscriptionPlanType|Optional $targetSubscriptionPlanType = new Optional,
    ) {}
}
