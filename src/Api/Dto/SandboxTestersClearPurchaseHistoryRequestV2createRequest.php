<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SandboxTestersClearPurchaseHistoryRequestV2CreateRequest
 */
class SandboxTestersClearPurchaseHistoryRequestV2createRequest extends SpatieData
{
    public function __construct(
        public SandboxTestersClearPurchaseHistoryRequestV2createRequestData $data,
    ) {}
}
