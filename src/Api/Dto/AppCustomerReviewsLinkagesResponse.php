<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomerReviewsLinkagesResponse
 */
class AppCustomerReviewsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppCustomerReviewsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppCustomerReviewsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
