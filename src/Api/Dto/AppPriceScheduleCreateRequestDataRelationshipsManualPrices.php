<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPriceScheduleCreateRequestDataRelationshipsManualPrices
 */
class AppPriceScheduleCreateRequestDataRelationshipsManualPrices extends SpatieData
{
    /**
     * @param  array<int, AppPriceScheduleCreateRequestDataRelationshipsManualPricesDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppPriceScheduleCreateRequestDataRelationshipsManualPricesDataItem> */
        public array $data,
    ) {}
}
