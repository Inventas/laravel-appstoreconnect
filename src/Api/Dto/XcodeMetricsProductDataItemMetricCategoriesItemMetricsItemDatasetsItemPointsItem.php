<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemDatasetsItemPointsItem
 */
class XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemDatasetsItemPointsItem extends SpatieData
{
    public function __construct(
        public string|Optional $version = new Optional,
        public int|float|Optional $value = new Optional,
        public int|float|Optional $errorMargin = new Optional,
        public XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemDatasetsItemPointsItemPercentageBreakdown|Optional $percentageBreakdown = new Optional,
        public string|Optional $goal = new Optional,
    ) {}
}
