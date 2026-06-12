<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * FileLocation
 */
class FileLocation extends SpatieData
{
    public function __construct(
        public string|Optional $path = new Optional,
        public int|Optional $lineNumber = new Optional,
    ) {}
}
