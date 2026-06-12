<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemsLinkagesResponse
 */
class ReviewSubmissionItemsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, ReviewSubmissionItemsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, ReviewSubmissionItemsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
