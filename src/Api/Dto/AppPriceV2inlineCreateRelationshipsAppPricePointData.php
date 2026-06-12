<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPriceV2inlineCreateRelationshipsAppPricePointData
 */
class AppPriceV2inlineCreateRelationshipsAppPricePointData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
