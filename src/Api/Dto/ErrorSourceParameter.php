<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Parameter
 */
class ErrorSourceParameter extends SpatieData
{
    public function __construct(
        public string $parameter,
    ) {}
}
