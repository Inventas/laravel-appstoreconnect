<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiMacOsVersionAttributes
 */
class CiMacOsVersionAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $version = new Optional,
        public string|Optional $name = new Optional,
    ) {}
}
