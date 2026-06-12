<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotUpdateRequestData
 */
class AppScreenshotUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppScreenshotUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
