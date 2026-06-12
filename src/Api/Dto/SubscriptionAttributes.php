<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionAttributes
 */
class SubscriptionAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public string|Optional $productId = new Optional,
        public bool|Optional $familySharable = new Optional,
        public string|Optional $state = new Optional,
        public string|Optional $subscriptionPeriod = new Optional,
        public string|Optional $reviewNote = new Optional,
        public int|Optional $groupLevel = new Optional,
    ) {}
}
