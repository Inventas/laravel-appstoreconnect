<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * XcodeMetricsProductDataItemMetricCategoriesItemMetricsItem
 */
class XcodeMetricsProductDataItemMetricCategoriesItemMetricsItem extends SpatieData
{
    /**
     * @param  array<int, XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemGoalKeysItem>|Optional  $goalKeys
     * @param  array<int, XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemDatasetsItem>|Optional  $datasets
     */
    public function __construct(
        public string|Optional $identifier = new Optional,
        /** @var array<int, XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemGoalKeysItem>|Optional */
        public array|Optional $goalKeys = new Optional,
        public XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemUnit|Optional $unit = new Optional,
        /** @var array<int, XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemDatasetsItem>|Optional */
        public array|Optional $datasets = new Optional,
    ) {}
}
