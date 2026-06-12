<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppCustomProductPageCreateRequestData
 */
class AppCustomProductPageCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppCustomProductPageCreateRequestDataAttributes $attributes,
        public AppCustomProductPageCreateRequestDataRelationships $relationships,
    ) {}
}
