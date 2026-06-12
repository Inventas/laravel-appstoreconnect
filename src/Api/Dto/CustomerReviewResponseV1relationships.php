<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CustomerReviewResponseV1relationships
 */
class CustomerReviewResponseV1relationships extends SpatieData
{
    public function __construct(
        public CustomerReviewResponseV1relationshipsReview|Optional $review = new Optional,
    ) {}
}
