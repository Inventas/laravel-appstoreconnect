<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppScreenshotUpdateRequest
 */
class AppScreenshotUpdateRequest extends SpatieData
{
    public function __construct(
        public AppScreenshotUpdateRequestData $data,
    ) {}
}
