<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BundleIdAttributes
 */
class BundleIdAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public BundleIdPlatform|Optional $platform = new Optional,
        public string|Optional $identifier = new Optional,
        public string|Optional $seedId = new Optional,
    ) {}
}
