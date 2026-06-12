<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AnalyticsReportRequestAttributes
 */
class AnalyticsReportRequestAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $accessType = new Optional,
        public bool|Optional $stoppedDueToInactivity = new Optional,
    ) {}
}
