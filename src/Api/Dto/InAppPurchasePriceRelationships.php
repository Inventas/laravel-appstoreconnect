<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePriceRelationships
 */
class InAppPurchasePriceRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchasePriceRelationshipsInAppPurchasePricePoint|Optional $inAppPurchasePricePoint = new Optional,
        public InAppPurchasePriceRelationshipsTerritory|Optional $territory = new Optional,
    ) {}
}
