<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BundleIdRelationships
 */
class BundleIdRelationships extends SpatieData
{
    public function __construct(
        public BundleIdRelationshipsProfiles|Optional $profiles = new Optional,
        public BundleIdRelationshipsBundleIdCapabilities|Optional $bundleIdCapabilities = new Optional,
        public BundleIdRelationshipsApp|Optional $app = new Optional,
    ) {}
}
