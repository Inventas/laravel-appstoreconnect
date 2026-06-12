<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * Property
 */
class Property extends SpatieData
{
    public function __construct(
        public string|Optional $key = new Optional,
        public string|Optional $value = new Optional,
    ) {}
}
