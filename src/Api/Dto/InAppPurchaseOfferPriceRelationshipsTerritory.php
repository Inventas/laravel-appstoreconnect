<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferPriceRelationshipsTerritory
 */
class InAppPurchaseOfferPriceRelationshipsTerritory extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferPriceRelationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
