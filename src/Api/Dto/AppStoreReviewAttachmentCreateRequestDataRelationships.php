<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreReviewAttachmentCreateRequestDataRelationships
 */
class AppStoreReviewAttachmentCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppStoreReviewAttachmentCreateRequestDataRelationshipsAppStoreReviewDetail $appStoreReviewDetail,
    ) {}
}
