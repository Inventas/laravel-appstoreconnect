<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildBundleRelationships
 */
class BuildBundleRelationships extends SpatieData
{
    public function __construct(
        public BuildBundleRelationshipsAppClipDomainCacheStatus|Optional $appClipDomainCacheStatus = new Optional,
        public BuildBundleRelationshipsAppClipDomainDebugStatus|Optional $appClipDomainDebugStatus = new Optional,
        public BuildBundleRelationshipsBetaAppClipInvocations|Optional $betaAppClipInvocations = new Optional,
        public BuildBundleRelationshipsBuildBundleFileSizes|Optional $buildBundleFileSizes = new Optional,
    ) {}
}
