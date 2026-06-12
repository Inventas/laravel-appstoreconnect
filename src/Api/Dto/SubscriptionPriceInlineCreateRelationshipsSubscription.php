<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPriceInlineCreateRelationshipsSubscription
 */
class SubscriptionPriceInlineCreateRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public SubscriptionPriceInlineCreateRelationshipsSubscriptionData|Optional $data = new Optional,
    ) {}
}
