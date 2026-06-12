<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPriceScheduleCreateRequestDataRelationshipsBaseTerritory
 */
class AppPriceScheduleCreateRequestDataRelationshipsBaseTerritory extends SpatieData
{
    public function __construct(
        public AppPriceScheduleCreateRequestDataRelationshipsBaseTerritoryData $data,
    ) {}
}
