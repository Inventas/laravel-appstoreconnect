<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionReleaseRequestCreateRequestDataRelationshipsAppStoreVersion
 */
class AppStoreVersionReleaseRequestCreateRequestDataRelationshipsAppStoreVersion extends SpatieData
{
    public function __construct(
        public AppStoreVersionReleaseRequestCreateRequestDataRelationshipsAppStoreVersionData $data,
    ) {}
}
