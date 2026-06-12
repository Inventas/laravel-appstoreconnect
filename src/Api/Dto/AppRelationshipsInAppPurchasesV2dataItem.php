<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppRelationshipsInAppPurchasesV2dataItem
 */
class AppRelationshipsInAppPurchasesV2dataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
