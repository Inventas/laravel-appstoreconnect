<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEventScreenshotCreateRequest
 */
class AppEventScreenshotCreateRequest extends SpatieData
{
    public function __construct(
        public AppEventScreenshotCreateRequestData $data,
    ) {}
}
