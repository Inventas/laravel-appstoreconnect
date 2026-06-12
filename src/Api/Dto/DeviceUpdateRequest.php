<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * DeviceUpdateRequest
 */
class DeviceUpdateRequest extends SpatieData
{
    public function __construct(
        public DeviceUpdateRequestData $data,
    ) {}
}
