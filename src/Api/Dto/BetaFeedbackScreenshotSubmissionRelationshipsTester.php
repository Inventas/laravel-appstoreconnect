<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaFeedbackScreenshotSubmissionRelationshipsTester
 */
class BetaFeedbackScreenshotSubmissionRelationshipsTester extends SpatieData
{
    public function __construct(
        public BetaFeedbackScreenshotSubmissionRelationshipsTesterData|Optional $data = new Optional,
    ) {}
}
