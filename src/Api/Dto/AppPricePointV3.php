<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPricePointV3
 */
class AppPricePointV3 extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppPricePointV3attributes|Optional $attributes = new Optional,
        public AppPricePointV3relationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
