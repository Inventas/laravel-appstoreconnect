<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewSetCreateRequestData
 */
class AppPreviewSetCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppPreviewSetCreateRequestDataAttributes $attributes,
        public AppPreviewSetCreateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
