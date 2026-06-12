<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppMarketplaceSearchDetailLinkageResponse
 */
class AppMarketplaceSearchDetailLinkageResponse extends SpatieData
{
    public function __construct(
        public AppMarketplaceSearchDetailLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
