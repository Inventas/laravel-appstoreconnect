<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * IntegerRange
 */
class IntegerRange extends SpatieData
{
    public function __construct(
        public int|Optional $minimum = new Optional,
        public int|Optional $maximum = new Optional,
    ) {}
}
