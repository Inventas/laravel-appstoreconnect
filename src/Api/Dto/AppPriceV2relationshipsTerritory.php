<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPriceV2relationshipsTerritory
 */
class AppPriceV2relationshipsTerritory extends SpatieData
{
    public function __construct(
        public AppPriceV2relationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
