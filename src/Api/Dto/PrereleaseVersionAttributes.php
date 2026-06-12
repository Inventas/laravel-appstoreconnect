<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PrereleaseVersionAttributes
 */
class PrereleaseVersionAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $version = new Optional,
        public Platform|Optional $platform = new Optional,
    ) {}
}
