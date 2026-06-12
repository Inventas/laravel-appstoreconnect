<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePriceInlineCreateAttributes
 */
class InAppPurchasePriceInlineCreateAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $startDate = new Optional,
        public string|Optional|null $endDate = new Optional,
    ) {}
}
