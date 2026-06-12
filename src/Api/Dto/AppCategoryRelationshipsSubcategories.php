<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCategoryRelationshipsSubcategories
 */
class AppCategoryRelationshipsSubcategories extends SpatieData
{
    /**
     * @param  array<int, AppCategoryRelationshipsSubcategoriesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppCategoryRelationshipsSubcategoriesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
