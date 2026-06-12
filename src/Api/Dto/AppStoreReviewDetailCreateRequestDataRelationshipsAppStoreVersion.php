<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreReviewDetailCreateRequestDataRelationshipsAppStoreVersion
 */
class AppStoreReviewDetailCreateRequestDataRelationshipsAppStoreVersion extends SpatieData
{
    public function __construct(
        public AppStoreReviewDetailCreateRequestDataRelationshipsAppStoreVersionData $data,
    ) {}
}
