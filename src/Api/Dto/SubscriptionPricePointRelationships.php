<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPricePointRelationships
 */
class SubscriptionPricePointRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionPricePointRelationshipsTerritory|Optional $territory = new Optional,
        public SubscriptionPricePointRelationshipsEqualizations|Optional $equalizations = new Optional,
    ) {}
}
