<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseV2inAppPurchaseLocalizationsLinkagesResponseDataItem
 */
class InAppPurchaseV2inAppPurchaseLocalizationsLinkagesResponseDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
