<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreview
 */
class AppPreview extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppPreviewAttributes|Optional $attributes = new Optional,
        public AppPreviewRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
