<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * HttpHeader
 */
class HttpHeader extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public string|Optional $value = new Optional,
    ) {}
}
