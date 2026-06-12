<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemGoalKeysItem
 */
class XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemGoalKeysItem extends SpatieData
{
    public function __construct(
        public string|Optional $goalKey = new Optional,
        public int|Optional $lowerBound = new Optional,
        public int|Optional $upperBound = new Optional,
    ) {}
}
