<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferPriceInlineCreateRelationshipsPricePoint
 */
class InAppPurchaseOfferPriceInlineCreateRelationshipsPricePoint extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferPriceInlineCreateRelationshipsPricePointData|Optional $data = new Optional,
    ) {}
}
