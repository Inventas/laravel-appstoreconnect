<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAppStoreReviewDetailRelationshipsAppClipDefaultExperience
 */
class AppClipAppStoreReviewDetailRelationshipsAppClipDefaultExperience extends SpatieData
{
    public function __construct(
        public AppClipAppStoreReviewDetailRelationshipsAppClipDefaultExperienceData|Optional $data = new Optional,
    ) {}
}
