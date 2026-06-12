<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemDatasetsItem
 */
class XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemDatasetsItem extends SpatieData
{
    /**
     * @param  array<int, XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemDatasetsItemPointsItem>|Optional  $points
     */
    public function __construct(
        public XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemDatasetsItemFilterCriteria|Optional $filterCriteria = new Optional,
        /** @var array<int, XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemDatasetsItemPointsItem>|Optional */
        public array|Optional $points = new Optional,
        public XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemDatasetsItemRecommendedMetricGoal|Optional $recommendedMetricGoal = new Optional,
    ) {}
}
