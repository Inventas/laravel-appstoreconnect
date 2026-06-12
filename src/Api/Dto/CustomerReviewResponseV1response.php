<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CustomerReviewResponseV1Response
 */
class CustomerReviewResponseV1response extends SpatieData
{
    /**
     * @param  array<int, CustomerReview>|Optional  $included
     */
    public function __construct(
        public CustomerReviewResponseV1 $data,
        public DocumentLinks $links,
        /** @var array<int, CustomerReview>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
