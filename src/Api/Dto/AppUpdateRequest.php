<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppUpdateRequest
 */
class AppUpdateRequest extends SpatieData
{
    public function __construct(
        public AppUpdateRequestData $data,
    ) {}
}
