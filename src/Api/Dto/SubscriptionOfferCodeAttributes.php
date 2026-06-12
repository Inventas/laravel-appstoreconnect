<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeAttributes
 */
class SubscriptionOfferCodeAttributes extends SpatieData
{
    /**
     * @param  array<int, SubscriptionCustomerEligibility>|Optional  $customerEligibilities
     */
    public function __construct(
        public string|Optional $name = new Optional,
        /** @var array<int, SubscriptionCustomerEligibility>|Optional */
        public array|Optional $customerEligibilities = new Optional,
        public SubscriptionOfferEligibility|Optional $offerEligibility = new Optional,
        public SubscriptionOfferDuration|Optional $duration = new Optional,
        public SubscriptionOfferMode|Optional $offerMode = new Optional,
        public int|Optional $numberOfPeriods = new Optional,
        public int|Optional $totalNumberOfCodes = new Optional,
        public int|Optional $productionCodeCount = new Optional,
        public int|Optional $sandboxCodeCount = new Optional,
        public bool|Optional $active = new Optional,
        public bool|Optional $autoRenewEnabled = new Optional,
        public SubscriptionPlanType|Optional $targetSubscriptionPlanType = new Optional,
    ) {}
}
