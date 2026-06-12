<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppReviewSubmissionCreateRequestDataRelationships
 */
class BetaAppReviewSubmissionCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public BetaAppReviewSubmissionCreateRequestDataRelationshipsBuild $build,
    ) {}
}
