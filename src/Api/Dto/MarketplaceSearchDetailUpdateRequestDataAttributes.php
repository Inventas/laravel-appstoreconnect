<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * MarketplaceSearchDetailUpdateRequestDataAttributes
 */
class MarketplaceSearchDetailUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $catalogUrl = new Optional,
    ) {}
}
