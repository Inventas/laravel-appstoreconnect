<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreReviewAttachmentRelationships
 */
class AppStoreReviewAttachmentRelationships extends SpatieData
{
    public function __construct(
        public AppStoreReviewAttachmentRelationshipsAppStoreReviewDetail|Optional $appStoreReviewDetail = new Optional,
    ) {}
}
