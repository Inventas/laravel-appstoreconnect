<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePricePointRelationshipsTerritory
 */
class InAppPurchasePricePointRelationshipsTerritory extends SpatieData
{
    public function __construct(
        public InAppPurchasePricePointRelationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
