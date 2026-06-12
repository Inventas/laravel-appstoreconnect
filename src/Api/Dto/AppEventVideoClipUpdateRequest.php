<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEventVideoClipUpdateRequest
 */
class AppEventVideoClipUpdateRequest extends SpatieData
{
    public function __construct(
        public AppEventVideoClipUpdateRequestData $data,
    ) {}
}
