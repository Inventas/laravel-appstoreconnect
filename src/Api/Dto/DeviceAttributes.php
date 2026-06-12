<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DeviceAttributes
 */
class DeviceAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public BundleIdPlatform|Optional $platform = new Optional,
        public string|Optional $udid = new Optional,
        public string|Optional $deviceClass = new Optional,
        public string|Optional $status = new Optional,
        public string|Optional $model = new Optional,
        public string|Optional $addedDate = new Optional,
    ) {}
}
