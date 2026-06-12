<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * XcodeMetrics
 */
class XcodeMetrics extends SpatieData
{
    /**
     * @param  array<int, XcodeMetricsProductDataItem>|Optional  $productData
     */
    public function __construct(
        public string|Optional $version = new Optional,
        public XcodeMetricsInsights|Optional $insights = new Optional,
        /** @var array<int, XcodeMetricsProductDataItem>|Optional */
        public array|Optional $productData = new Optional,
    ) {}
}
