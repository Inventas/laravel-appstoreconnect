<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseImageRelationshipsInAppPurchase
 */
class InAppPurchaseImageRelationshipsInAppPurchase extends SpatieData
{
    public function __construct(
        public InAppPurchaseImageRelationshipsInAppPurchaseData|Optional $data = new Optional,
    ) {}
}
