<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AnalyticsReportRequestCreateRequestDataRelationships
 */
class AnalyticsReportRequestCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AnalyticsReportRequestCreateRequestDataRelationshipsApp $app,
    ) {}
}
