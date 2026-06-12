<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * DeviceCreateRequestDataAttributes
 */
class DeviceCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $name,
        public BundleIdPlatform $platform,
        public string $udid,
    ) {}
}
