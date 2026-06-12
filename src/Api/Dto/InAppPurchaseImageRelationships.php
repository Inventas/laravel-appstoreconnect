<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseImageRelationships
 */
class InAppPurchaseImageRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseImageRelationshipsInAppPurchase|Optional $inAppPurchase = new Optional,
    ) {}
}
