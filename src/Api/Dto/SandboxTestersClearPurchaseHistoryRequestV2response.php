<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SandboxTestersClearPurchaseHistoryRequestV2Response
 */
class SandboxTestersClearPurchaseHistoryRequestV2response extends SpatieData
{
    public function __construct(
        public SandboxTestersClearPurchaseHistoryRequestV2 $data,
        public DocumentLinks $links,
    ) {}
}
