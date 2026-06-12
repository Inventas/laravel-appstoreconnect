<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppReviewSubmissionWithoutIncludesResponse
 */
class BetaAppReviewSubmissionWithoutIncludesResponse extends SpatieData
{
    public function __construct(
        public BetaAppReviewSubmission $data,
        public DocumentLinks $links,
    ) {}
}
