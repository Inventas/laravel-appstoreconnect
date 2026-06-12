<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppScreenshotSetCreateRequest
 */
class AppScreenshotSetCreateRequest extends SpatieData
{
    public function __construct(
        public AppScreenshotSetCreateRequestData $data,
    ) {}
}
