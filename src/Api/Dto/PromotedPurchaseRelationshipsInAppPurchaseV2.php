<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PromotedPurchaseRelationshipsInAppPurchaseV2
 */
class PromotedPurchaseRelationshipsInAppPurchaseV2 extends SpatieData
{
    public function __construct(
        public PromotedPurchaseRelationshipsInAppPurchaseV2data|Optional $data = new Optional,
    ) {}
}
