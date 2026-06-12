<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreReviewDetailCreateRequestDataRelationships
 */
class AppStoreReviewDetailCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppStoreReviewDetailCreateRequestDataRelationshipsAppStoreVersion $appStoreVersion,
    ) {}
}
