<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseOfferCodeCreateRequestDataRelationships
 */
class InAppPurchaseOfferCodeCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferCodeCreateRequestDataRelationshipsInAppPurchase $inAppPurchase,
        public InAppPurchaseOfferCodeCreateRequestDataRelationshipsPrices $prices,
    ) {}
}
