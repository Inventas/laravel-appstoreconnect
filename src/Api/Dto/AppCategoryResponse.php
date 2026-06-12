<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCategoryResponse
 */
class AppCategoryResponse extends SpatieData
{
    /**
     * @param  array<int, AppCategory>|Optional  $included
     */
    public function __construct(
        public AppCategory $data,
        public DocumentLinks $links,
        /** @var array<int, AppCategory>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
