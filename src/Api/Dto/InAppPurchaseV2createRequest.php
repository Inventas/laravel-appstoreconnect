<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseV2CreateRequest
 */
class InAppPurchaseV2createRequest extends SpatieData
{
    public function __construct(
        public InAppPurchaseV2createRequestData $data,
    ) {}
}
