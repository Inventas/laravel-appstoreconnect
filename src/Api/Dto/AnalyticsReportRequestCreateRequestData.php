<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AnalyticsReportRequestCreateRequestData
 */
class AnalyticsReportRequestCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AnalyticsReportRequestCreateRequestDataAttributes $attributes,
        public AnalyticsReportRequestCreateRequestDataRelationships $relationships,
    ) {}
}
