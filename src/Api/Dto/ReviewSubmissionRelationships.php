<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionRelationships
 */
class ReviewSubmissionRelationships extends SpatieData
{
    public function __construct(
        public ReviewSubmissionRelationshipsApp|Optional $app = new Optional,
        public ReviewSubmissionRelationshipsItems|Optional $items = new Optional,
        public ReviewSubmissionRelationshipsAppStoreVersionForReview|Optional $appStoreVersionForReview = new Optional,
        public ReviewSubmissionRelationshipsSubmittedByActor|Optional $submittedByActor = new Optional,
        public ReviewSubmissionRelationshipsLastUpdatedByActor|Optional $lastUpdatedByActor = new Optional,
    ) {}
}
