<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PerfPowerMetricAttributes
 */
class PerfPowerMetricAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $platform = new Optional,
        public string|Optional $metricType = new Optional,
        public string|Optional $deviceType = new Optional,
    ) {}
}
