<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageVersionInlineCreateAttributes
 */
class AppCustomProductPageVersionInlineCreateAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $deepLink = new Optional,
    ) {}
}
