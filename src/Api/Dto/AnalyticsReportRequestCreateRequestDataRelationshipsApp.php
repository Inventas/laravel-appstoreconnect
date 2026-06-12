<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AnalyticsReportRequestCreateRequestDataRelationshipsApp
 */
class AnalyticsReportRequestCreateRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public AnalyticsReportRequestCreateRequestDataRelationshipsAppData $data,
    ) {}
}
