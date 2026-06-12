<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPriceRelationshipsTerritory
 */
class SubscriptionPriceRelationshipsTerritory extends SpatieData
{
    public function __construct(
        public SubscriptionPriceRelationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
