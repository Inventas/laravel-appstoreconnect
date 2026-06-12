<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BundleIdCapabilityResponse
 */
class BundleIdCapabilityResponse extends SpatieData
{
    public function __construct(
        public BundleIdCapability $data,
        public DocumentLinks $links,
    ) {}
}
