<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewSet
 */
class AppPreviewSet extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppPreviewSetAttributes|Optional $attributes = new Optional,
        public AppPreviewSetRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
