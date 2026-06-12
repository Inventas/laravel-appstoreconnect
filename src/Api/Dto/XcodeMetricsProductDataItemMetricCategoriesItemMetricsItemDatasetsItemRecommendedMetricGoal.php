<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemDatasetsItemRecommendedMetricGoal
 */
class XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemDatasetsItemRecommendedMetricGoal extends SpatieData
{
    public function __construct(
        public int|float|Optional $value = new Optional,
        public string|Optional $detail = new Optional,
    ) {}
}
