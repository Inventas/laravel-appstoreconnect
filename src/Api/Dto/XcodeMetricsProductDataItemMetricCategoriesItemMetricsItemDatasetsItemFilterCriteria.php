<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemDatasetsItemFilterCriteria
 */
class XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemDatasetsItemFilterCriteria extends SpatieData
{
    public function __construct(
        public string|Optional $percentile = new Optional,
        public string|Optional $device = new Optional,
        public string|Optional $deviceMarketingName = new Optional,
    ) {}
}
