<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemUnit
 */
class XcodeMetricsProductDataItemMetricCategoriesItemMetricsItemUnit extends SpatieData
{
    public function __construct(
        public string|Optional $identifier = new Optional,
        public string|Optional $displayName = new Optional,
    ) {}
}
