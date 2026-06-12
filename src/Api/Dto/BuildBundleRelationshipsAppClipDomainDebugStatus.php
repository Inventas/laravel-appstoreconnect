<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildBundleRelationshipsAppClipDomainDebugStatus
 */
class BuildBundleRelationshipsAppClipDomainDebugStatus extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public BuildBundleRelationshipsAppClipDomainDebugStatusData|Optional $data = new Optional,
    ) {}
}
