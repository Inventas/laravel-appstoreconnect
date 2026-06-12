<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildBundleFileSizeAttributes
 */
class BuildBundleFileSizeAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $deviceModel = new Optional,
        public string|Optional $osVersion = new Optional,
        public int|Optional $downloadBytes = new Optional,
        public int|Optional $installBytes = new Optional,
    ) {}
}
