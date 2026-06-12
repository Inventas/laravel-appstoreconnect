<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePriceRelationshipsInAppPurchasePricePoint
 */
class InAppPurchasePriceRelationshipsInAppPurchasePricePoint extends SpatieData
{
    public function __construct(
        public InAppPurchasePriceRelationshipsInAppPurchasePricePointData|Optional $data = new Optional,
    ) {}
}
