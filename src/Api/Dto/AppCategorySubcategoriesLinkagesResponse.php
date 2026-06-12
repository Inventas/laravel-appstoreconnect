<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCategorySubcategoriesLinkagesResponse
 */
class AppCategorySubcategoriesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppCategorySubcategoriesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppCategorySubcategoriesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
