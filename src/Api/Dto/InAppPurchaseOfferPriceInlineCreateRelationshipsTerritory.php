<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferPriceInlineCreateRelationshipsTerritory
 */
class InAppPurchaseOfferPriceInlineCreateRelationshipsTerritory extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferPriceInlineCreateRelationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
