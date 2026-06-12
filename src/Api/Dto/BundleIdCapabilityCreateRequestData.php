<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BundleIdCapabilityCreateRequestData
 */
class BundleIdCapabilityCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public BundleIdCapabilityCreateRequestDataAttributes $attributes,
        public BundleIdCapabilityCreateRequestDataRelationships $relationships,
    ) {}
}
