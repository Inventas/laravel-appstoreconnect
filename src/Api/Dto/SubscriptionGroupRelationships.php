<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGroupRelationships
 */
class SubscriptionGroupRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionGroupRelationshipsSubscriptions|Optional $subscriptions = new Optional,
        public SubscriptionGroupRelationshipsSubscriptionGroupLocalizations|Optional $subscriptionGroupLocalizations = new Optional,
    ) {}
}
