<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * DeviceResponse
 */
class DeviceResponse extends SpatieData
{
    public function __construct(
        public Device $data,
        public DocumentLinks $links,
    ) {}
}
