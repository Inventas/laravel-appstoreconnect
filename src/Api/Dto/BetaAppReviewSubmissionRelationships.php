<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppReviewSubmissionRelationships
 */
class BetaAppReviewSubmissionRelationships extends SpatieData
{
    public function __construct(
        public BetaAppReviewSubmissionRelationshipsBuild|Optional $build = new Optional,
    ) {}
}
