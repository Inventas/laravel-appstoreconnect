<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseV2iapPriceScheduleLinkageResponse
 */
class InAppPurchaseV2iapPriceScheduleLinkageResponse extends SpatieData
{
    public function __construct(
        public InAppPurchaseV2iapPriceScheduleLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
