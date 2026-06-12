<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppReviewSubmissionRelationshipsBuild
 */
class BetaAppReviewSubmissionRelationshipsBuild extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public BetaAppReviewSubmissionRelationshipsBuildData|Optional $data = new Optional,
    ) {}
}
