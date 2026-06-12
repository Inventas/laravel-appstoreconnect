<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreReviewDetailRelationshipsAppStoreVersion
 */
class AppStoreReviewDetailRelationshipsAppStoreVersion extends SpatieData
{
    public function __construct(
        public AppStoreReviewDetailRelationshipsAppStoreVersionData|Optional $data = new Optional,
    ) {}
}
