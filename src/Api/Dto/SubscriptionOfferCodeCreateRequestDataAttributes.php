<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeCreateRequestDataAttributes
 */
class SubscriptionOfferCodeCreateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, SubscriptionCustomerEligibility>  $customerEligibilities
     */
    public function __construct(
        public string $name,
        /** @var array<int, SubscriptionCustomerEligibility> */
        public array $customerEligibilities,
        public SubscriptionOfferEligibility $offerEligibility,
        public SubscriptionOfferDuration $duration,
        public SubscriptionOfferMode $offerMode,
        public int $numberOfPeriods,
        public bool|Optional|null $autoRenewEnabled = new Optional,
        public SubscriptionPlanType|Optional $targetSubscriptionPlanType = new Optional,
    ) {}
}
