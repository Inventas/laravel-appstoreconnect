<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionUpdateRequestDataAttributes
 */
class SubscriptionUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $name = new Optional,
        public bool|Optional|null $familySharable = new Optional,
        public string|Optional|null $subscriptionPeriod = new Optional,
        public string|Optional|null $reviewNote = new Optional,
        public int|Optional|null $groupLevel = new Optional,
    ) {}
}
