<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * XcodeMetricsProductDataItemMetricCategoriesItem
 */
class XcodeMetricsProductDataItemMetricCategoriesItem extends SpatieData
{
    /**
     * @param  array<int, XcodeMetricsProductDataItemMetricCategoriesItemMetricsItem>|Optional  $metrics
     */
    public function __construct(
        public MetricCategory|Optional $identifier = new Optional,
        /** @var array<int, XcodeMetricsProductDataItemMetricCategoriesItemMetricsItem>|Optional */
        public array|Optional $metrics = new Optional,
    ) {}
}
