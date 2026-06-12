<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseV2relationshipsIapPriceScheduleData
 */
class InAppPurchaseV2relationshipsIapPriceScheduleData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
