<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AnalyticsReportRequestRelationships
 */
class AnalyticsReportRequestRelationships extends SpatieData
{
    public function __construct(
        public AnalyticsReportRequestRelationshipsReports|Optional $reports = new Optional,
    ) {}
}
