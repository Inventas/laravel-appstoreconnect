<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * Location
 */
class Location extends SpatieData
{
    public function __construct(
        public int|float|Optional $latitude = new Optional,
        public int|float|Optional $longitude = new Optional,
    ) {}
}
