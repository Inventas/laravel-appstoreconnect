<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseOfferCodeCreateRequestDataRelationshipsInAppPurchase
 */
class InAppPurchaseOfferCodeCreateRequestDataRelationshipsInAppPurchase extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferCodeCreateRequestDataRelationshipsInAppPurchaseData $data,
    ) {}
}
