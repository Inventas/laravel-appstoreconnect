<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemDatasetsItemPointsItemPercentageBreakdown
 */
class XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemDatasetsItemPointsItemPercentageBreakdown extends SpatieData
{
    public function __construct(
        public int|float|Optional $value = new Optional,
        public string|Optional $subSystemLabel = new Optional,
    ) {}
}
