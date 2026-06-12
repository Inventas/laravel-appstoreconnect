<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaFeedbackCrashSubmissionCrashLogLinkageResponse
 */
class BetaFeedbackCrashSubmissionCrashLogLinkageResponse extends SpatieData
{
    public function __construct(
        public BetaFeedbackCrashSubmissionCrashLogLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
