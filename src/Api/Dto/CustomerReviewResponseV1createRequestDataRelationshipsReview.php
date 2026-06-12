<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CustomerReviewResponseV1createRequestDataRelationshipsReview
 */
class CustomerReviewResponseV1createRequestDataRelationshipsReview extends SpatieData
{
    public function __construct(
        public CustomerReviewResponseV1createRequestDataRelationshipsReviewData $data,
    ) {}
}
