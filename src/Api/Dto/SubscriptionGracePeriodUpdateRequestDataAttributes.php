<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGracePeriodUpdateRequestDataAttributes
 */
class SubscriptionGracePeriodUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional|null $optIn = new Optional,
        public bool|Optional|null $sandboxOptIn = new Optional,
        public SubscriptionGracePeriodDuration|Optional $duration = new Optional,
        public string|Optional|null $renewalType = new Optional,
    ) {}
}
