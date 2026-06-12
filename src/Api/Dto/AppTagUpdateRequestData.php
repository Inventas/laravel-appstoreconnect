<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppTagUpdateRequestData
 */
class AppTagUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppTagUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
