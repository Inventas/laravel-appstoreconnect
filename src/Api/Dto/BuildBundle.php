<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildBundle
 */
class BuildBundle extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BuildBundleAttributes|Optional $attributes = new Optional,
        public BuildBundleRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
