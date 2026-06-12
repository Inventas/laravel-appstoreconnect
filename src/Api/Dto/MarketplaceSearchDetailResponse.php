<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * MarketplaceSearchDetailResponse
 */
class MarketplaceSearchDetailResponse extends SpatieData
{
    public function __construct(
        public MarketplaceSearchDetail $data,
        public DocumentLinks $links,
    ) {}
}
