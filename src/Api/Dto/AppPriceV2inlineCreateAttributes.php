<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPriceV2inlineCreateAttributes
 */
class AppPriceV2inlineCreateAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $startDate = new Optional,
        public string|Optional|null $endDate = new Optional,
    ) {}
}
