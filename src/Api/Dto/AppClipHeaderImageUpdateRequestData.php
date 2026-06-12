<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipHeaderImageUpdateRequestData
 */
class AppClipHeaderImageUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppClipHeaderImageUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
