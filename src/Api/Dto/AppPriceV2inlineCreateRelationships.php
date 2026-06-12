<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPriceV2inlineCreateRelationships
 */
class AppPriceV2inlineCreateRelationships extends SpatieData
{
    public function __construct(
        public AppPriceV2inlineCreateRelationshipsAppPricePoint|Optional $appPricePoint = new Optional,
    ) {}
}
