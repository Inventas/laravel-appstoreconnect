<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseImageCreateRequestDataRelationshipsInAppPurchase
 */
class InAppPurchaseImageCreateRequestDataRelationshipsInAppPurchase extends SpatieData
{
    public function __construct(
        public InAppPurchaseImageCreateRequestDataRelationshipsInAppPurchaseData $data,
    ) {}
}
