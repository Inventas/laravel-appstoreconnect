<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AnalyticsReportSegmentAttributes
 */
class AnalyticsReportSegmentAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $checksum = new Optional,
        public int|Optional $sizeInBytes = new Optional,
        public string|Optional $url = new Optional,
    ) {}
}
