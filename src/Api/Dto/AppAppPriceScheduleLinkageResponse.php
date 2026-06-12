<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppAppPriceScheduleLinkageResponse
 */
class AppAppPriceScheduleLinkageResponse extends SpatieData
{
    public function __construct(
        public AppAppPriceScheduleLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
