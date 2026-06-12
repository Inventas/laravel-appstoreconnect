<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppReviewSubmissionCreateRequest
 */
class BetaAppReviewSubmissionCreateRequest extends SpatieData
{
    public function __construct(
        public BetaAppReviewSubmissionCreateRequestData $data,
    ) {}
}
