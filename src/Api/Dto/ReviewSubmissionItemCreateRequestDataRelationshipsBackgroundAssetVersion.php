<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemCreateRequestDataRelationshipsBackgroundAssetVersion
 */
class ReviewSubmissionItemCreateRequestDataRelationshipsBackgroundAssetVersion extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemCreateRequestDataRelationshipsBackgroundAssetVersionData|Optional $data = new Optional,
    ) {}
}
