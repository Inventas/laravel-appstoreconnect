<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SandboxTestersClearPurchaseHistoryRequestV2createRequestDataRelationships
 */
class SandboxTestersClearPurchaseHistoryRequestV2createRequestDataRelationships extends SpatieData
{
    public function __construct(
        public SandboxTestersClearPurchaseHistoryRequestV2createRequestDataRelationshipsSandboxTesters $sandboxTesters,
    ) {}
}
