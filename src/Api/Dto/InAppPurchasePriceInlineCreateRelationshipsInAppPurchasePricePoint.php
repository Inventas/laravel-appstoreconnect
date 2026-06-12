<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePriceInlineCreateRelationshipsInAppPurchasePricePoint
 */
class InAppPurchasePriceInlineCreateRelationshipsInAppPurchasePricePoint extends SpatieData
{
    public function __construct(
        public InAppPurchasePriceInlineCreateRelationshipsInAppPurchasePricePointData|Optional $data = new Optional,
    ) {}
}
