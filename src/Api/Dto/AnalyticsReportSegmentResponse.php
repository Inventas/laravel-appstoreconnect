<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AnalyticsReportSegmentResponse
 */
class AnalyticsReportSegmentResponse extends SpatieData
{
    public function __construct(
        public AnalyticsReportSegment $data,
        public DocumentLinks $links,
    ) {}
}
