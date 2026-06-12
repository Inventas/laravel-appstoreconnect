<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DeviceFamilyOsVersionFilter
 */
class DeviceFamilyOsVersionFilter extends SpatieData
{
    public function __construct(
        public DeviceFamily|Optional $deviceFamily = new Optional,
        public string|Optional $minimumOsInclusive = new Optional,
        public string|Optional $maximumOsInclusive = new Optional,
    ) {}
}
