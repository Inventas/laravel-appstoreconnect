<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseV2updateRequestDataAttributes
 */
class InAppPurchaseV2updateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $name = new Optional,
        public string|Optional|null $reviewNote = new Optional,
        public bool|Optional|null $familySharable = new Optional,
    ) {}
}
