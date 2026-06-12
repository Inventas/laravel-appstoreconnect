<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * MarketplaceSearchDetailUpdateRequestData
 */
class MarketplaceSearchDetailUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public MarketplaceSearchDetailUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
