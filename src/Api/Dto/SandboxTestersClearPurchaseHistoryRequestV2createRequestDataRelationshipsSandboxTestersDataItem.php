<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SandboxTestersClearPurchaseHistoryRequestV2createRequestDataRelationshipsSandboxTestersDataItem
 */
class SandboxTestersClearPurchaseHistoryRequestV2createRequestDataRelationshipsSandboxTestersDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
