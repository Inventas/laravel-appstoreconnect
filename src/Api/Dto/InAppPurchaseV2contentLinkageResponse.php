<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseV2contentLinkageResponse
 */
class InAppPurchaseV2contentLinkageResponse extends SpatieData
{
    public function __construct(
        public InAppPurchaseV2contentLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
