<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventUpdateRequestData
 */
class AppEventUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppEventUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
