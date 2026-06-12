<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * MarketplaceSearchDetailUpdateRequest
 */
class MarketplaceSearchDetailUpdateRequest extends SpatieData
{
    public function __construct(
        public MarketplaceSearchDetailUpdateRequestData $data,
    ) {}
}
