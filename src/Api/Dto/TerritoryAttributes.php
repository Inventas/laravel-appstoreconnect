<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * TerritoryAttributes
 */
class TerritoryAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $currency = new Optional,
    ) {}
}
