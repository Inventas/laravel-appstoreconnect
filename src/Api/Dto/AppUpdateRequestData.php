<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppUpdateRequestData
 */
class AppUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
