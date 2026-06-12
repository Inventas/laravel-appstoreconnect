<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClip
 */
class AppClip extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppClipAttributes|Optional $attributes = new Optional,
        public AppClipRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
