<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SandboxTestersClearPurchaseHistoryRequestV2createRequestDataRelationshipsSandboxTesters
 */
class SandboxTestersClearPurchaseHistoryRequestV2createRequestDataRelationshipsSandboxTesters extends SpatieData
{
    /**
     * @param  array<int, SandboxTestersClearPurchaseHistoryRequestV2createRequestDataRelationshipsSandboxTestersDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SandboxTestersClearPurchaseHistoryRequestV2createRequestDataRelationshipsSandboxTestersDataItem> */
        public array $data,
    ) {}
}
