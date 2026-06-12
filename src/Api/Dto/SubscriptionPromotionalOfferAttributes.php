<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferAttributes
 */
class SubscriptionPromotionalOfferAttributes extends SpatieData
{
    public function __construct(
        public SubscriptionOfferDuration|Optional $duration = new Optional,
        public string|Optional $name = new Optional,
        public int|Optional $numberOfPeriods = new Optional,
        public string|Optional $offerCode = new Optional,
        public SubscriptionOfferMode|Optional $offerMode = new Optional,
        public SubscriptionPlanType|Optional $targetSubscriptionPlanType = new Optional,
    ) {}
}
