<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreReviewDetailAppStoreReviewAttachmentsLinkagesResponse
 */
class AppStoreReviewDetailAppStoreReviewAttachmentsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreReviewDetailAppStoreReviewAttachmentsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppStoreReviewDetailAppStoreReviewAttachmentsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
