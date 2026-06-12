<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildBundleRelationshipsAppClipDomainDebugStatusData
 */
class BuildBundleRelationshipsAppClipDomainDebugStatusData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
