<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEventCreateRequestData
 */
class AppEventCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppEventCreateRequestDataAttributes $attributes,
        public AppEventCreateRequestDataRelationships $relationships,
    ) {}
}
