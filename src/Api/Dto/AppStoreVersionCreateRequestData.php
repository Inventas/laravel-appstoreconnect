<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionCreateRequestData
 */
class AppStoreVersionCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppStoreVersionCreateRequestDataAttributes $attributes,
        public AppStoreVersionCreateRequestDataRelationships $relationships,
    ) {}
}
