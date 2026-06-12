<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPriceV2attributes
 */
class AppPriceV2attributes extends SpatieData
{
    public function __construct(
        public bool|Optional $manual = new Optional,
        public string|Optional $startDate = new Optional,
        public string|Optional $endDate = new Optional,
    ) {}
}
