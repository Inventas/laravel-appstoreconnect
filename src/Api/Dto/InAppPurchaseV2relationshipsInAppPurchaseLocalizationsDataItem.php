<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseV2relationshipsInAppPurchaseLocalizationsDataItem
 */
class InAppPurchaseV2relationshipsInAppPurchaseLocalizationsDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
