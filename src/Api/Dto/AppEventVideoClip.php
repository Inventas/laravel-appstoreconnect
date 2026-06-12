<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventVideoClip
 */
class AppEventVideoClip extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppEventVideoClipAttributes|Optional $attributes = new Optional,
        public AppEventVideoClipRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
