<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppCategoryWithoutIncludesResponse
 */
class AppCategoryWithoutIncludesResponse extends SpatieData
{
    public function __construct(
        public AppCategory $data,
        public DocumentLinks $links,
    ) {}
}
