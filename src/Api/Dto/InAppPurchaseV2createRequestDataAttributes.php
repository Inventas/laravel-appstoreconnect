<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseV2createRequestDataAttributes
 */
class InAppPurchaseV2createRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $name,
        public string $productId,
        public InAppPurchaseType $inAppPurchaseType,
        public string|Optional|null $reviewNote = new Optional,
        public bool|Optional|null $familySharable = new Optional,
    ) {}
}
