<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WinBackOfferUpdateRequestDataAttributes
 */
class WinBackOfferUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public int|Optional|null $customerEligibilityPaidSubscriptionDurationInMonths = new Optional,
        public IntegerRange|Optional $customerEligibilityTimeSinceLastSubscribedInMonths = new Optional,
        public int|Optional|null $customerEligibilityWaitBetweenOffersInMonths = new Optional,
        public string|Optional|null $startDate = new Optional,
        public string|Optional|null $endDate = new Optional,
        public string|Optional|null $priority = new Optional,
        public string|Optional|null $promotionIntent = new Optional,
    ) {}
}
