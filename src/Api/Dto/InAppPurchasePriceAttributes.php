<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePriceAttributes
 */
class InAppPurchasePriceAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $startDate = new Optional,
        public string|Optional $endDate = new Optional,
        public bool|Optional $manual = new Optional,
    ) {}
}
