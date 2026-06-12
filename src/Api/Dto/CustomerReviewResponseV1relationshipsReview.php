<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CustomerReviewResponseV1relationshipsReview
 */
class CustomerReviewResponseV1relationshipsReview extends SpatieData
{
    public function __construct(
        public CustomerReviewResponseV1relationshipsReviewData|Optional $data = new Optional,
    ) {}
}
