<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaFeedbackScreenshotSubmission
 */
class BetaFeedbackScreenshotSubmission extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BetaFeedbackScreenshotSubmissionAttributes|Optional $attributes = new Optional,
        public BetaFeedbackScreenshotSubmissionRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
