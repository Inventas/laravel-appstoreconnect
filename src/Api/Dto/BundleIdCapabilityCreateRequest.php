<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BundleIdCapabilityCreateRequest
 */
class BundleIdCapabilityCreateRequest extends SpatieData
{
    public function __construct(
        public BundleIdCapabilityCreateRequestData $data,
    ) {}
}
