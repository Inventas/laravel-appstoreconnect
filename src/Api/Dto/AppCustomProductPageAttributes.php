<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageAttributes
 */
class AppCustomProductPageAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public string|Optional $url = new Optional,
        public bool|Optional $visible = new Optional,
    ) {}
}
