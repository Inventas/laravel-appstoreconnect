<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PassTypeIdAttributes
 */
class PassTypeIdAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public string|Optional $identifier = new Optional,
    ) {}
}
