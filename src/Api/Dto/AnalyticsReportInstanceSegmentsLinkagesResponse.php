<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AnalyticsReportInstanceSegmentsLinkagesResponse
 */
class AnalyticsReportInstanceSegmentsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AnalyticsReportInstanceSegmentsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AnalyticsReportInstanceSegmentsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
