<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceCreateRequestDataRelationships
 */
class AppClipDefaultExperienceCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppClipDefaultExperienceCreateRequestDataRelationshipsAppClip $appClip,
        public AppClipDefaultExperienceCreateRequestDataRelationshipsReleaseWithAppStoreVersion|Optional $releaseWithAppStoreVersion = new Optional,
        public AppClipDefaultExperienceCreateRequestDataRelationshipsAppClipDefaultExperienceTemplate|Optional $appClipDefaultExperienceTemplate = new Optional,
    ) {}
}
