<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AnalyticsReportRequestCreateRequest
 */
class AnalyticsReportRequestCreateRequest extends SpatieData
{
    public function __construct(
        public AnalyticsReportRequestCreateRequestData $data,
    ) {}
}
