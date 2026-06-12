<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageVersionUpdateRequestData
 */
class AppCustomProductPageVersionUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppCustomProductPageVersionUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
