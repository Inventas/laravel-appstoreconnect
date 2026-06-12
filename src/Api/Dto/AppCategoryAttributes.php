<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCategoryAttributes
 */
class AppCategoryAttributes extends SpatieData
{
    /**
     * @param  array<int, Platform>|Optional  $platforms
     */
    public function __construct(
        /** @var array<int, Platform>|Optional */
        public array|Optional $platforms = new Optional,
    ) {}
}
