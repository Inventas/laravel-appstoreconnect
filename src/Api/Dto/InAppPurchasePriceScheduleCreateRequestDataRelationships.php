<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchasePriceScheduleCreateRequestDataRelationships
 */
class InAppPurchasePriceScheduleCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchasePriceScheduleCreateRequestDataRelationshipsInAppPurchase $inAppPurchase,
        public InAppPurchasePriceScheduleCreateRequestDataRelationshipsBaseTerritory $baseTerritory,
        public InAppPurchasePriceScheduleCreateRequestDataRelationshipsManualPrices $manualPrices,
    ) {}
}
