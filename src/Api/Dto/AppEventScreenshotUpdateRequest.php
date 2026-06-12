<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEventScreenshotUpdateRequest
 */
class AppEventScreenshotUpdateRequest extends SpatieData
{
    public function __construct(
        public AppEventScreenshotUpdateRequestData $data,
    ) {}
}
