<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AnalyticsReportRequestsResponse
 */
class AnalyticsReportRequestsResponse extends SpatieData
{
    /**
     * @param  array<int, AnalyticsReportRequest>  $data
     * @param  array<int, AnalyticsReport>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AnalyticsReportRequest> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AnalyticsReport>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
