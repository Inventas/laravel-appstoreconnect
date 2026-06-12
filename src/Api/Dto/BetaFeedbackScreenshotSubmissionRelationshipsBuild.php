<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaFeedbackScreenshotSubmissionRelationshipsBuild
 */
class BetaFeedbackScreenshotSubmissionRelationshipsBuild extends SpatieData
{
    public function __construct(
        public BetaFeedbackScreenshotSubmissionRelationshipsBuildData|Optional $data = new Optional,
    ) {}
}
