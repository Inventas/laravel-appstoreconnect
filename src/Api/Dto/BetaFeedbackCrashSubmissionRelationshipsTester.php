<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaFeedbackCrashSubmissionRelationshipsTester
 */
class BetaFeedbackCrashSubmissionRelationshipsTester extends SpatieData
{
    public function __construct(
        public BetaFeedbackCrashSubmissionRelationshipsTesterData|Optional $data = new Optional,
    ) {}
}
