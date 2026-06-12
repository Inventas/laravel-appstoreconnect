<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGracePeriodAttributes
 */
class SubscriptionGracePeriodAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional $optIn = new Optional,
        public bool|Optional $sandboxOptIn = new Optional,
        public SubscriptionGracePeriodDuration|Optional $duration = new Optional,
        public string|Optional $renewalType = new Optional,
    ) {}
}
