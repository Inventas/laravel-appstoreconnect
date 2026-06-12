<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCategoryRelationships
 */
class AppCategoryRelationships extends SpatieData
{
    public function __construct(
        public AppCategoryRelationshipsSubcategories|Optional $subcategories = new Optional,
        public AppCategoryRelationshipsParent|Optional $parent = new Optional,
    ) {}
}
