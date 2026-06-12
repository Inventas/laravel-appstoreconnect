<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceRelationships
 */
class AppClipDefaultExperienceRelationships extends SpatieData
{
    public function __construct(
        public AppClipDefaultExperienceRelationshipsAppClip|Optional $appClip = new Optional,
        public AppClipDefaultExperienceRelationshipsReleaseWithAppStoreVersion|Optional $releaseWithAppStoreVersion = new Optional,
        public AppClipDefaultExperienceRelationshipsAppClipDefaultExperienceLocalizations|Optional $appClipDefaultExperienceLocalizations = new Optional,
        public AppClipDefaultExperienceRelationshipsAppClipAppStoreReviewDetail|Optional $appClipAppStoreReviewDetail = new Optional,
    ) {}
}
