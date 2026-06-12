<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipHeaderImage
 */
class AppClipHeaderImage extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppClipHeaderImageAttributes|Optional $attributes = new Optional,
        public AppClipHeaderImageRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
