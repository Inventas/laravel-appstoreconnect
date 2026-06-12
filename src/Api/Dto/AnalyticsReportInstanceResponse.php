<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AnalyticsReportInstanceResponse
 */
class AnalyticsReportInstanceResponse extends SpatieData
{
    public function __construct(
        public AnalyticsReportInstance $data,
        public DocumentLinks $links,
    ) {}
}
