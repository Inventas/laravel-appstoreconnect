<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseV2UpdateRequest
 */
class InAppPurchaseV2updateRequest extends SpatieData
{
    public function __construct(
        public InAppPurchaseV2updateRequestData $data,
    ) {}
}
