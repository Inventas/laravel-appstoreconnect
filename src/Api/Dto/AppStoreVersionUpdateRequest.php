<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionUpdateRequest
 */
class AppStoreVersionUpdateRequest extends SpatieData
{
    public function __construct(
        public AppStoreVersionUpdateRequestData $data,
    ) {}
}
