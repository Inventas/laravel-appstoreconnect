<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * DeviceCreateRequest
 */
class DeviceCreateRequest extends SpatieData
{
    public function __construct(
        public DeviceCreateRequestData $data,
    ) {}
}
