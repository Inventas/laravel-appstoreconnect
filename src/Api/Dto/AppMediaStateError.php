<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppMediaStateError
 */
class AppMediaStateError extends SpatieData
{
    public function __construct(
        public string|Optional $code = new Optional,
        public string|Optional $description = new Optional,
    ) {}
}
