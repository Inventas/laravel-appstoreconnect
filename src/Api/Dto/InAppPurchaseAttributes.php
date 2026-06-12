<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseAttributes
 */
class InAppPurchaseAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $referenceName = new Optional,
        public string|Optional $productId = new Optional,
        public string|Optional $inAppPurchaseType = new Optional,
        public string|Optional $state = new Optional,
    ) {}
}
