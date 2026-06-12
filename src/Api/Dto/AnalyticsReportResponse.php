<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AnalyticsReportResponse
 */
class AnalyticsReportResponse extends SpatieData
{
    public function __construct(
        public AnalyticsReport $data,
        public DocumentLinks $links,
    ) {}
}
