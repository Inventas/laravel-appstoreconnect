<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPriceV2inlineCreateRelationshipsAppPricePoint
 */
class AppPriceV2inlineCreateRelationshipsAppPricePoint extends SpatieData
{
    public function __construct(
        public AppPriceV2inlineCreateRelationshipsAppPricePointData|Optional $data = new Optional,
    ) {}
}
