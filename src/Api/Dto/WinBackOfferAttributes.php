<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WinBackOfferAttributes
 */
class WinBackOfferAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $referenceName = new Optional,
        public string|Optional $offerId = new Optional,
        public SubscriptionOfferDuration|Optional $duration = new Optional,
        public SubscriptionOfferMode|Optional $offerMode = new Optional,
        public int|Optional $periodCount = new Optional,
        public int|Optional $customerEligibilityPaidSubscriptionDurationInMonths = new Optional,
        public IntegerRange|Optional $customerEligibilityTimeSinceLastSubscribedInMonths = new Optional,
        public int|Optional $customerEligibilityWaitBetweenOffersInMonths = new Optional,
        public string|Optional $startDate = new Optional,
        public string|Optional $endDate = new Optional,
        public string|Optional $priority = new Optional,
        public string|Optional $promotionIntent = new Optional,
        public SubscriptionPlanType|Optional $targetSubscriptionPlanType = new Optional,
    ) {}
}
