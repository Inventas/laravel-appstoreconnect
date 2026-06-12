<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaFeedbackCrashSubmissionRelationshipsBuild
 */
class BetaFeedbackCrashSubmissionRelationshipsBuild extends SpatieData
{
    public function __construct(
        public BetaFeedbackCrashSubmissionRelationshipsBuildData|Optional $data = new Optional,
    ) {}
}
