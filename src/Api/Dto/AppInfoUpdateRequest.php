<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppInfoUpdateRequest
 */
class AppInfoUpdateRequest extends SpatieData
{
    public function __construct(
        public AppInfoUpdateRequestData $data,
    ) {}
}
