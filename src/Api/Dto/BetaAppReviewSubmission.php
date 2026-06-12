<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppReviewSubmission
 */
class BetaAppReviewSubmission extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BetaAppReviewSubmissionAttributes|Optional $attributes = new Optional,
        public BetaAppReviewSubmissionRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
