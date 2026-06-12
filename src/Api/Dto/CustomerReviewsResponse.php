<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CustomerReviewsResponse
 */
class CustomerReviewsResponse extends SpatieData
{
    /**
     * @param  array<int, CustomerReview>  $data
     * @param  array<int, CustomerReviewResponseV1|Territory>|Optional  $included
     */
    public function __construct(
        /** @var array<int, CustomerReview> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, CustomerReviewResponseV1|Territory>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
