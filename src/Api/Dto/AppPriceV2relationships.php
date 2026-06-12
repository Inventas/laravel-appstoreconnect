<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPriceV2relationships
 */
class AppPriceV2relationships extends SpatieData
{
    public function __construct(
        public AppPriceV2relationshipsAppPricePoint|Optional $appPricePoint = new Optional,
        public AppPriceV2relationshipsTerritory|Optional $territory = new Optional,
    ) {}
}
