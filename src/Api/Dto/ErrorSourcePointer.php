<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * JsonPointer
 */
class ErrorSourcePointer extends SpatieData
{
    public function __construct(
        public string $pointer,
    ) {}
}
