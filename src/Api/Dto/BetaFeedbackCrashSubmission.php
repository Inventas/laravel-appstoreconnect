<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaFeedbackCrashSubmission
 */
class BetaFeedbackCrashSubmission extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BetaFeedbackCrashSubmissionAttributes|Optional $attributes = new Optional,
        public BetaFeedbackCrashSubmissionRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
