<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePriceInlineCreateRelationshipsInAppPurchaseV2
 */
class InAppPurchasePriceInlineCreateRelationshipsInAppPurchaseV2 extends SpatieData
{
    public function __construct(
        public InAppPurchasePriceInlineCreateRelationshipsInAppPurchaseV2data|Optional $data = new Optional,
    ) {}
}
