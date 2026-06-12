<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ReviewSubmissionItemCreateRequestDataRelationshipsReviewSubmissionData
 */
class ReviewSubmissionItemCreateRequestDataRelationshipsReviewSubmissionData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
