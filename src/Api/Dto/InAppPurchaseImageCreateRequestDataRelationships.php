<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseImageCreateRequestDataRelationships
 */
class InAppPurchaseImageCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseImageCreateRequestDataRelationshipsInAppPurchase $inAppPurchase,
    ) {}
}
