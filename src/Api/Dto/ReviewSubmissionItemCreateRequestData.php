<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ReviewSubmissionItemCreateRequestData
 */
class ReviewSubmissionItemCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public ReviewSubmissionItemCreateRequestDataRelationships $relationships,
    ) {}
}
