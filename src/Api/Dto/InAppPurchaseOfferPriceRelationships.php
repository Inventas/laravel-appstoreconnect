<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferPriceRelationships
 */
class InAppPurchaseOfferPriceRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferPriceRelationshipsTerritory|Optional $territory = new Optional,
        public InAppPurchaseOfferPriceRelationshipsPricePoint|Optional $pricePoint = new Optional,
    ) {}
}
