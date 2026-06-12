<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferPriceRelationshipsPricePoint
 */
class InAppPurchaseOfferPriceRelationshipsPricePoint extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferPriceRelationshipsPricePointData|Optional $data = new Optional,
    ) {}
}
