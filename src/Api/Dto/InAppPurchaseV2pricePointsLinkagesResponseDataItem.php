<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseV2pricePointsLinkagesResponseDataItem
 */
class InAppPurchaseV2pricePointsLinkagesResponseDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
