<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DeviceUpdateRequestData
 */
class DeviceUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public DeviceUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
