<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AnalyticsReportSegmentsResponse
 */
class AnalyticsReportSegmentsResponse extends SpatieData
{
    /**
     * @param  array<int, AnalyticsReportSegment>  $data
     */
    public function __construct(
        /** @var array<int, AnalyticsReportSegment> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
