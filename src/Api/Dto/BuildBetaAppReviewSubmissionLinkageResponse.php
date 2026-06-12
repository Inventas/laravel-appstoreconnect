<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildBetaAppReviewSubmissionLinkageResponse
 */
class BuildBetaAppReviewSubmissionLinkageResponse extends SpatieData
{
    public function __construct(
        public BuildBetaAppReviewSubmissionLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
