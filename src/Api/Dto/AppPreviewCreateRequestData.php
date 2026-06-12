<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPreviewCreateRequestData
 */
class AppPreviewCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppPreviewCreateRequestDataAttributes $attributes,
        public AppPreviewCreateRequestDataRelationships $relationships,
    ) {}
}
