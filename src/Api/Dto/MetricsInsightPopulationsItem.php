<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * MetricsInsightPopulationsItem
 */
class MetricsInsightPopulationsItem extends SpatieData
{
    public function __construct(
        public int|float|Optional $deltaPercentage = new Optional,
        public string|Optional $percentile = new Optional,
        public string|Optional $summaryString = new Optional,
        public int|float|Optional $referenceAverageValue = new Optional,
        public int|float|Optional $latestVersionValue = new Optional,
        public string|Optional $device = new Optional,
    ) {}
}
