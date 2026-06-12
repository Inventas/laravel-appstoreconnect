<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppTag
 */
class AppTag extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppTagAttributes|Optional $attributes = new Optional,
        public AppTagRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
