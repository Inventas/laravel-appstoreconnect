<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseV2promotedPurchaseLinkageResponse
 */
class InAppPurchaseV2promotedPurchaseLinkageResponse extends SpatieData
{
    public function __construct(
        public InAppPurchaseV2promotedPurchaseLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
