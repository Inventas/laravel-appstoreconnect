<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPricePointV3relationships
 */
class AppPricePointV3relationships extends SpatieData
{
    public function __construct(
        public AppPricePointV3relationshipsApp|Optional $app = new Optional,
        public AppPricePointV3relationshipsEqualizations|Optional $equalizations = new Optional,
        public AppPricePointV3relationshipsTerritory|Optional $territory = new Optional,
    ) {}
}
