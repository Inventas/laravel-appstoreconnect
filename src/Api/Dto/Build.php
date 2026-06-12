<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * Build
 */
class Build extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BuildAttributes|Optional $attributes = new Optional,
        public BuildRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
