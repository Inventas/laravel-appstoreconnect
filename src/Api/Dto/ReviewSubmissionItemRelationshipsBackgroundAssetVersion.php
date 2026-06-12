<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemRelationshipsBackgroundAssetVersion
 */
class ReviewSubmissionItemRelationshipsBackgroundAssetVersion extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemRelationshipsBackgroundAssetVersionData|Optional $data = new Optional,
    ) {}
}
