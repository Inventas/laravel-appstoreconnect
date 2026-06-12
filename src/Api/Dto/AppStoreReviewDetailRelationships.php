<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreReviewDetailRelationships
 */
class AppStoreReviewDetailRelationships extends SpatieData
{
    public function __construct(
        public AppStoreReviewDetailRelationshipsAppStoreVersion|Optional $appStoreVersion = new Optional,
        public AppStoreReviewDetailRelationshipsAppStoreReviewAttachments|Optional $appStoreReviewAttachments = new Optional,
    ) {}
}
