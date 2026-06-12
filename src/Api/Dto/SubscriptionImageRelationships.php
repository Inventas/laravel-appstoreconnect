<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionImageRelationships
 */
class SubscriptionImageRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionImageRelationshipsSubscription|Optional $subscription = new Optional,
    ) {}
}
