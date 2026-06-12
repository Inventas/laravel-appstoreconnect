<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPriceV2relationshipsAppPricePointData
 */
class AppPriceV2relationshipsAppPricePointData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
