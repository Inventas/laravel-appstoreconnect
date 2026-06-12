<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPriceScheduleCreateRequestDataRelationships
 */
class AppPriceScheduleCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppPriceScheduleCreateRequestDataRelationshipsApp $app,
        public AppPriceScheduleCreateRequestDataRelationshipsBaseTerritory $baseTerritory,
        public AppPriceScheduleCreateRequestDataRelationshipsManualPrices $manualPrices,
    ) {}
}
