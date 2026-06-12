<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPricePointV3relationshipsTerritoryData
 */
class AppPricePointV3relationshipsTerritoryData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
