<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEventVideoClipCreateRequestData
 */
class AppEventVideoClipCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppEventVideoClipCreateRequestDataAttributes $attributes,
        public AppEventVideoClipCreateRequestDataRelationships $relationships,
    ) {}
}
