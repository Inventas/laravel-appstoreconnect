<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CustomerReviewResponseV1createRequestDataRelationships
 */
class CustomerReviewResponseV1createRequestDataRelationships extends SpatieData
{
    public function __construct(
        public CustomerReviewResponseV1createRequestDataRelationshipsReview $review,
    ) {}
}
