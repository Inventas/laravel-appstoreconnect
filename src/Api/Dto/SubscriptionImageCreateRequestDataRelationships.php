<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionImageCreateRequestDataRelationships
 */
class SubscriptionImageCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionImageCreateRequestDataRelationshipsSubscription $subscription,
    ) {}
}
