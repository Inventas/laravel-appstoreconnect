<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreReviewAttachmentsResponse
 */
class AppStoreReviewAttachmentsResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreReviewAttachment>  $data
     * @param  array<int, AppStoreReviewDetail>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppStoreReviewAttachment> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppStoreReviewDetail>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
