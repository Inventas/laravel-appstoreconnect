<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceCreateRequestDataRelationshipsReleaseWithAppStoreVersion
 */
class AppClipDefaultExperienceCreateRequestDataRelationshipsReleaseWithAppStoreVersion extends SpatieData
{
    public function __construct(
        public AppClipDefaultExperienceCreateRequestDataRelationshipsReleaseWithAppStoreVersionData|Optional $data = new Optional,
    ) {}
}
