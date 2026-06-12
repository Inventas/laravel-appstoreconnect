<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipHeaderImageCreateRequestData
 */
class AppClipHeaderImageCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppClipHeaderImageCreateRequestDataAttributes $attributes,
        public AppClipHeaderImageCreateRequestDataRelationships $relationships,
    ) {}
}
