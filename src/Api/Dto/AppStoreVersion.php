<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersion
 */
class AppStoreVersion extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppStoreVersionAttributes|Optional $attributes = new Optional,
        public AppStoreVersionRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
