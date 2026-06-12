<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmission
 */
class ReviewSubmission extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public ReviewSubmissionAttributes|Optional $attributes = new Optional,
        public ReviewSubmissionRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
