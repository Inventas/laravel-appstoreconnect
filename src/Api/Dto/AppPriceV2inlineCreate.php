<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPriceV2inlineCreate
 */
class AppPriceV2inlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public string|Optional $id = new Optional,
        public AppPriceV2inlineCreateAttributes|Optional $attributes = new Optional,
        public AppPriceV2inlineCreateRelationships|Optional $relationships = new Optional,
    ) {}
}
