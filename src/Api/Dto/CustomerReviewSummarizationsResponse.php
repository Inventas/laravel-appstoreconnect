<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CustomerReviewSummarizationsResponse
 */
class CustomerReviewSummarizationsResponse extends SpatieData
{
    /**
     * @param  array<int, CustomerReviewSummarization>  $data
     * @param  array<int, Territory>|Optional  $included
     */
    public function __construct(
        /** @var array<int, CustomerReviewSummarization> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, Territory>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
