<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppReviewSubmissionCreateRequestData
 */
class BetaAppReviewSubmissionCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public BetaAppReviewSubmissionCreateRequestDataRelationships $relationships,
    ) {}
}
