<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPriceRelationships
 */
class SubscriptionPriceRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionPriceRelationshipsTerritory|Optional $territory = new Optional,
        public SubscriptionPriceRelationshipsSubscriptionPricePoint|Optional $subscriptionPricePoint = new Optional,
    ) {}
}
