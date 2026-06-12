<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AnalyticsReportInstanceAttributes
 */
class AnalyticsReportInstanceAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $granularity = new Optional,
        public string|Optional $processingDate = new Optional,
    ) {}
}
