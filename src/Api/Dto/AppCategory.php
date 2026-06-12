<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCategory
 */
class AppCategory extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppCategoryAttributes|Optional $attributes = new Optional,
        public AppCategoryRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
