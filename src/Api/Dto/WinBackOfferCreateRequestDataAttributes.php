<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WinBackOfferCreateRequestDataAttributes
 */
class WinBackOfferCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $referenceName,
        public string $offerId,
        public SubscriptionOfferDuration $duration,
        public SubscriptionOfferMode $offerMode,
        public int $periodCount,
        public int $customerEligibilityPaidSubscriptionDurationInMonths,
        public IntegerRange $customerEligibilityTimeSinceLastSubscribedInMonths,
        public string $startDate,
        public string $priority,
        public int|Optional|null $customerEligibilityWaitBetweenOffersInMonths = new Optional,
        public string|Optional|null $endDate = new Optional,
        public string|Optional|null $promotionIntent = new Optional,
        public SubscriptionPlanType|Optional $targetSubscriptionPlanType = new Optional,
    ) {}
}
