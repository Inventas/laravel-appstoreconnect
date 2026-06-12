<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * DeviceCreateRequestData
 */
class DeviceCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public DeviceCreateRequestDataAttributes $attributes,
    ) {}
}
