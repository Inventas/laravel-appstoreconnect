<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPricePointRelationshipsTerritory
 */
class SubscriptionPricePointRelationshipsTerritory extends SpatieData
{
    public function __construct(
        public SubscriptionPricePointRelationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
