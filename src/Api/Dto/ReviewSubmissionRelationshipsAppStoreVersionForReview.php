<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionRelationshipsAppStoreVersionForReview
 */
class ReviewSubmissionRelationshipsAppStoreVersionForReview extends SpatieData
{
    public function __construct(
        public ReviewSubmissionRelationshipsAppStoreVersionForReviewData|Optional $data = new Optional,
    ) {}
}
