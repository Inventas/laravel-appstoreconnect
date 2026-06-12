<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BundleIdCapabilityCreateRequestDataRelationships
 */
class BundleIdCapabilityCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public BundleIdCapabilityCreateRequestDataRelationshipsBundleId $bundleId,
    ) {}
}
