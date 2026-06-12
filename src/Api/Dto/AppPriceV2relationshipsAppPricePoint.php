<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPriceV2relationshipsAppPricePoint
 */
class AppPriceV2relationshipsAppPricePoint extends SpatieData
{
    public function __construct(
        public AppPriceV2relationshipsAppPricePointData|Optional $data = new Optional,
    ) {}
}
