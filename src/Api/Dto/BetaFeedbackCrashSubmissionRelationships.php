<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaFeedbackCrashSubmissionRelationships
 */
class BetaFeedbackCrashSubmissionRelationships extends SpatieData
{
    public function __construct(
        public BetaFeedbackCrashSubmissionRelationshipsCrashLog|Optional $crashLog = new Optional,
        public BetaFeedbackCrashSubmissionRelationshipsBuild|Optional $build = new Optional,
        public BetaFeedbackCrashSubmissionRelationshipsTester|Optional $tester = new Optional,
    ) {}
}
