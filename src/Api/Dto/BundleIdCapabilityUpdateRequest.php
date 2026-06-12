<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BundleIdCapabilityUpdateRequest
 */
class BundleIdCapabilityUpdateRequest extends SpatieData
{
    public function __construct(
        public BundleIdCapabilityUpdateRequestData $data,
    ) {}
}
