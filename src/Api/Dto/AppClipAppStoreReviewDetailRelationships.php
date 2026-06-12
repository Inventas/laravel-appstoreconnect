<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAppStoreReviewDetailRelationships
 */
class AppClipAppStoreReviewDetailRelationships extends SpatieData
{
    public function __construct(
        public AppClipAppStoreReviewDetailRelationshipsAppClipDefaultExperience|Optional $appClipDefaultExperience = new Optional,
    ) {}
}
