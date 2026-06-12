<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePriceInlineCreateRelationships
 */
class InAppPurchasePriceInlineCreateRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchasePriceInlineCreateRelationshipsInAppPurchaseV2|Optional $inAppPurchaseV2 = new Optional,
        public InAppPurchasePriceInlineCreateRelationshipsInAppPurchasePricePoint|Optional $inAppPurchasePricePoint = new Optional,
    ) {}
}
