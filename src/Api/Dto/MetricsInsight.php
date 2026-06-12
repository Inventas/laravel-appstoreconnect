<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * MetricsInsight
 */
class MetricsInsight extends SpatieData
{
    /**
     * @param  array<int, MetricsInsightPopulationsItem>|Optional  $populations
     */
    public function __construct(
        public MetricCategory|Optional $metricCategory = new Optional,
        public string|Optional $latestVersion = new Optional,
        public string|Optional $metric = new Optional,
        public string|Optional $summaryString = new Optional,
        public string|Optional $referenceVersions = new Optional,
        public int|float|Optional $maxLatestVersionValue = new Optional,
        public string|Optional $subSystemLabel = new Optional,
        public bool|Optional $highImpact = new Optional,
        /** @var array<int, MetricsInsightPopulationsItem>|Optional */
        public array|Optional $populations = new Optional,
    ) {}
}
