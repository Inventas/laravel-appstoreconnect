<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AnalyticsReportInstanceRelationships
 */
class AnalyticsReportInstanceRelationships extends SpatieData
{
    public function __construct(
        public AnalyticsReportInstanceRelationshipsSegments|Optional $segments = new Optional,
    ) {}
}
