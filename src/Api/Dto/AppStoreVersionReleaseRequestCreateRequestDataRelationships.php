<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionReleaseRequestCreateRequestDataRelationships
 */
class AppStoreVersionReleaseRequestCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppStoreVersionReleaseRequestCreateRequestDataRelationshipsAppStoreVersion $appStoreVersion,
    ) {}
}
