<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchasePriceInlineCreateRelationshipsInAppPurchaseV2data
 */
class InAppPurchasePriceInlineCreateRelationshipsInAppPurchaseV2data extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
