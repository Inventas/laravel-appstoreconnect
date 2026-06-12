<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppReviewSubmissionsLinkagesResponse
 */
class AppReviewSubmissionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppReviewSubmissionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppReviewSubmissionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
