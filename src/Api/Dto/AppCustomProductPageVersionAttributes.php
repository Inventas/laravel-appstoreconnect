<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageVersionAttributes
 */
class AppCustomProductPageVersionAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $version = new Optional,
        public string|Optional $state = new Optional,
        public string|Optional $deepLink = new Optional,
    ) {}
}
