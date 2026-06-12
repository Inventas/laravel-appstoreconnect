<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * MarketplaceSearchDetailAttributes
 */
class MarketplaceSearchDetailAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $catalogUrl = new Optional,
    ) {}
}
