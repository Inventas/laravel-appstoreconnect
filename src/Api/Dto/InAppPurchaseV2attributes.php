<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseV2attributes
 */
class InAppPurchaseV2attributes extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public string|Optional $productId = new Optional,
        public InAppPurchaseType|Optional $inAppPurchaseType = new Optional,
        public InAppPurchaseState|Optional $state = new Optional,
        public string|Optional $reviewNote = new Optional,
        public bool|Optional $familySharable = new Optional,
        public bool|Optional $contentHosting = new Optional,
    ) {}
}
