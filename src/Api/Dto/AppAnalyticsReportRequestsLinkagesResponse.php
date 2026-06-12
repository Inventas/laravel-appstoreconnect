<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAnalyticsReportRequestsLinkagesResponse
 */
class AppAnalyticsReportRequestsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppAnalyticsReportRequestsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppAnalyticsReportRequestsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
