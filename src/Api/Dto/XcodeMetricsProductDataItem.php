<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * XcodeMetricsProductDataItem
 */
class XcodeMetricsProductDataItem extends SpatieData
{
    /**
     * @param  array<int, XcodeMetricsProductDataItemMetricCategoriesItem>|Optional  $metricCategories
     */
    public function __construct(
        public string|Optional $platform = new Optional,
        /** @var array<int, XcodeMetricsProductDataItemMetricCategoriesItem>|Optional */
        public array|Optional $metricCategories = new Optional,
    ) {}
}
