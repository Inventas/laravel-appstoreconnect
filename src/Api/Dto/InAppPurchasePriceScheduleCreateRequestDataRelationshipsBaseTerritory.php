<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchasePriceScheduleCreateRequestDataRelationshipsBaseTerritory
 */
class InAppPurchasePriceScheduleCreateRequestDataRelationshipsBaseTerritory extends SpatieData
{
    public function __construct(
        public InAppPurchasePriceScheduleCreateRequestDataRelationshipsBaseTerritoryData $data,
    ) {}
}
