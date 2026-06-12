<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPriceCreateRequestDataRelationshipsTerritory
 */
class SubscriptionPriceCreateRequestDataRelationshipsTerritory extends SpatieData
{
    public function __construct(
        public SubscriptionPriceCreateRequestDataRelationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
