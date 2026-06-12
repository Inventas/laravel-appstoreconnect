<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PerfPowerMetric
 */
class PerfPowerMetric extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public PerfPowerMetricAttributes|Optional $attributes = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
