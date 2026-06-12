<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreReviewAttachmentCreateRequestDataRelationshipsAppStoreReviewDetail
 */
class AppStoreReviewAttachmentCreateRequestDataRelationshipsAppStoreReviewDetail extends SpatieData
{
    public function __construct(
        public AppStoreReviewAttachmentCreateRequestDataRelationshipsAppStoreReviewDetailData $data,
    ) {}
}
