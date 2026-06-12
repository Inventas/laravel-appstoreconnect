<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventVideoClipUpdateRequestData
 */
class AppEventVideoClipUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppEventVideoClipUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
