<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BundleIdCapabilityUpdateRequestData
 */
class BundleIdCapabilityUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BundleIdCapabilityUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
