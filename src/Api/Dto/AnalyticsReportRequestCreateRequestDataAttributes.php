<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AnalyticsReportRequestCreateRequestDataAttributes
 */
class AnalyticsReportRequestCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $accessType,
    ) {}
}
