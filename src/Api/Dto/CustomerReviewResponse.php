<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CustomerReviewResponse
 */
class CustomerReviewResponse extends SpatieData
{
    /**
     * @param  array<int, CustomerReviewResponseV1|Territory>|Optional  $included
     */
    public function __construct(
        public CustomerReview $data,
        public DocumentLinks $links,
        /** @var array<int, CustomerReviewResponseV1|Territory>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
