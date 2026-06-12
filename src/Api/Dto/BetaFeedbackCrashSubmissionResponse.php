<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaFeedbackCrashSubmissionResponse
 */
class BetaFeedbackCrashSubmissionResponse extends SpatieData
{
    /**
     * @param  array<int, BetaTester|Build>|Optional  $included
     */
    public function __construct(
        public BetaFeedbackCrashSubmission $data,
        public DocumentLinks $links,
        /** @var array<int, BetaTester|Build>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
