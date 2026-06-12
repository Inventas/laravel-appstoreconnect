<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BundleIdCapabilityCreateRequestDataRelationshipsBundleId
 */
class BundleIdCapabilityCreateRequestDataRelationshipsBundleId extends SpatieData
{
    public function __construct(
        public BundleIdCapabilityCreateRequestDataRelationshipsBundleIdData $data,
    ) {}
}
