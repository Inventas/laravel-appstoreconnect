<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreReviewAttachmentRelationshipsAppStoreReviewDetail
 */
class AppStoreReviewAttachmentRelationshipsAppStoreReviewDetail extends SpatieData
{
    public function __construct(
        public AppStoreReviewAttachmentRelationshipsAppStoreReviewDetailData|Optional $data = new Optional,
    ) {}
}
