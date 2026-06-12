<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchasePriceScheduleCreateRequestDataRelationshipsInAppPurchase
 */
class InAppPurchasePriceScheduleCreateRequestDataRelationshipsInAppPurchase extends SpatieData
{
    public function __construct(
        public InAppPurchasePriceScheduleCreateRequestDataRelationshipsInAppPurchaseData $data,
    ) {}
}
