<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * XcodeMetricsInsights
 */
class XcodeMetricsInsights extends SpatieData
{
    /**
     * @param  array<int, MetricsInsight>|Optional  $trendingUp
     * @param  array<int, MetricsInsight>|Optional  $regressions
     */
    public function __construct(
        /** @var array<int, MetricsInsight>|Optional */
        public array|Optional $trendingUp = new Optional,
        /** @var array<int, MetricsInsight>|Optional */
        public array|Optional $regressions = new Optional,
    ) {}
}
