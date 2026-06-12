<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCategoriesWithoutIncludesResponse
 */
class AppCategoriesWithoutIncludesResponse extends SpatieData
{
    /**
     * @param  array<int, AppCategory>  $data
     */
    public function __construct(
        /** @var array<int, AppCategory> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
