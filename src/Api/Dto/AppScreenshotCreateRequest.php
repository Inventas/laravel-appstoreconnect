<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppScreenshotCreateRequest
 */
class AppScreenshotCreateRequest extends SpatieData
{
    public function __construct(
        public AppScreenshotCreateRequestData $data,
    ) {}
}
