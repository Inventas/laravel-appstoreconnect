<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppReviewSubmissionCreateRequestDataRelationshipsBuild
 */
class BetaAppReviewSubmissionCreateRequestDataRelationshipsBuild extends SpatieData
{
    public function __construct(
        public BetaAppReviewSubmissionCreateRequestDataRelationshipsBuildData $data,
    ) {}
}
