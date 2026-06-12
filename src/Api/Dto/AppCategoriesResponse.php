<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCategoriesResponse
 */
class AppCategoriesResponse extends SpatieData
{
    /**
     * @param  array<int, AppCategory>  $data
     * @param  array<int, AppCategory>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppCategory> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppCategory>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
