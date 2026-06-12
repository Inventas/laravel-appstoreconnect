<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipAppStoreReviewDetailCreateRequestDataRelationships
 */
class AppClipAppStoreReviewDetailCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppClipAppStoreReviewDetailCreateRequestDataRelationshipsAppClipDefaultExperience $appClipDefaultExperience,
    ) {}
}
