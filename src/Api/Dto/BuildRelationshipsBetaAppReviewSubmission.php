<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildRelationshipsBetaAppReviewSubmission
 */
class BuildRelationshipsBetaAppReviewSubmission extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public BuildRelationshipsBetaAppReviewSubmissionData|Optional $data = new Optional,
    ) {}
}
