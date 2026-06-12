<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchasePriceScheduleCreateRequestDataRelationshipsManualPrices
 */
class InAppPurchasePriceScheduleCreateRequestDataRelationshipsManualPrices extends SpatieData
{
    /**
     * @param  array<int, InAppPurchasePriceScheduleCreateRequestDataRelationshipsManualPricesDataItem>  $data
     */
    public function __construct(
        /** @var array<int, InAppPurchasePriceScheduleCreateRequestDataRelationshipsManualPricesDataItem> */
        public array $data,
    ) {}
}
