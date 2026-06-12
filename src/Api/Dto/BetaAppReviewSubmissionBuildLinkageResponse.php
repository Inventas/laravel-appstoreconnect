<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppReviewSubmissionBuildLinkageResponse
 */
class BetaAppReviewSubmissionBuildLinkageResponse extends SpatieData
{
    public function __construct(
        public BetaAppReviewSubmissionBuildLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
