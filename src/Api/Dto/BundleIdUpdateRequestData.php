<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BundleIdUpdateRequestData
 */
class BundleIdUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BundleIdUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
