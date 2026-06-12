<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppReviewSubmissionAttributes
 */
class BetaAppReviewSubmissionAttributes extends SpatieData
{
    public function __construct(
        public BetaReviewState|Optional $betaReviewState = new Optional,
        public string|Optional $submittedDate = new Optional,
    ) {}
}
