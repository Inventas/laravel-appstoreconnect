<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPricePointV3relationshipsTerritory
 */
class AppPricePointV3relationshipsTerritory extends SpatieData
{
    public function __construct(
        public AppPricePointV3relationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
