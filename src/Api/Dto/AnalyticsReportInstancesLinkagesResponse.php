<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AnalyticsReportInstancesLinkagesResponse
 */
class AnalyticsReportInstancesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AnalyticsReportInstancesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AnalyticsReportInstancesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
