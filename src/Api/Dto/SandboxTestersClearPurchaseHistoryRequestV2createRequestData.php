<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SandboxTestersClearPurchaseHistoryRequestV2createRequestData
 */
class SandboxTestersClearPurchaseHistoryRequestV2createRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public SandboxTestersClearPurchaseHistoryRequestV2createRequestDataRelationships $relationships,
    ) {}
}
