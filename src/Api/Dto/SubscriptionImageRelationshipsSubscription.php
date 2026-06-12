<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionImageRelationshipsSubscription
 */
class SubscriptionImageRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public SubscriptionImageRelationshipsSubscriptionData|Optional $data = new Optional,
    ) {}
}
