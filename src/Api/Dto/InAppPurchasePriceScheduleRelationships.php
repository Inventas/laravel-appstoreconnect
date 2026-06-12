<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePriceScheduleRelationships
 */
class InAppPurchasePriceScheduleRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchasePriceScheduleRelationshipsBaseTerritory|Optional $baseTerritory = new Optional,
        public InAppPurchasePriceScheduleRelationshipsManualPrices|Optional $manualPrices = new Optional,
        public InAppPurchasePriceScheduleRelationshipsAutomaticPrices|Optional $automaticPrices = new Optional,
    ) {}
}
