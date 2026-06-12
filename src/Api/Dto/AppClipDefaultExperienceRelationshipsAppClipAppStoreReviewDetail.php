<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceRelationshipsAppClipAppStoreReviewDetail
 */
class AppClipDefaultExperienceRelationshipsAppClipAppStoreReviewDetail extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppClipDefaultExperienceRelationshipsAppClipAppStoreReviewDetailData|Optional $data = new Optional,
    ) {}
}
