<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionCreateRequestData
 */
class ReviewSubmissionCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public ReviewSubmissionCreateRequestDataRelationships $relationships,
        public ReviewSubmissionCreateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
