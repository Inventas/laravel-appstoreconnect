<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AnalyticsReportRequestReportsLinkagesResponse
 */
class AnalyticsReportRequestReportsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AnalyticsReportRequestReportsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AnalyticsReportRequestReportsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
