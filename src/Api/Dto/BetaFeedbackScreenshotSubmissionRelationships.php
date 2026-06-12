<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaFeedbackScreenshotSubmissionRelationships
 */
class BetaFeedbackScreenshotSubmissionRelationships extends SpatieData
{
    public function __construct(
        public BetaFeedbackScreenshotSubmissionRelationshipsBuild|Optional $build = new Optional,
        public BetaFeedbackScreenshotSubmissionRelationshipsTester|Optional $tester = new Optional,
    ) {}
}
