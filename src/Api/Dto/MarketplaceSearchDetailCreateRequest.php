<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * MarketplaceSearchDetailCreateRequest
 */
class MarketplaceSearchDetailCreateRequest extends SpatieData
{
    public function __construct(
        public MarketplaceSearchDetailCreateRequestData $data,
    ) {}
}
