<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferInlineCreateAttributes
 */
class SubscriptionPromotionalOfferInlineCreateAttributes extends SpatieData
{
    public function __construct(
        public SubscriptionOfferDuration $duration,
        public string $name,
        public int $numberOfPeriods,
        public string $offerCode,
        public SubscriptionOfferMode $offerMode,
        public SubscriptionPlanType|Optional $targetSubscriptionPlanType = new Optional,
    ) {}
}
