<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionImageCreateRequestDataRelationshipsSubscription
 */
class SubscriptionImageCreateRequestDataRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public SubscriptionImageCreateRequestDataRelationshipsSubscriptionData $data,
    ) {}
}
