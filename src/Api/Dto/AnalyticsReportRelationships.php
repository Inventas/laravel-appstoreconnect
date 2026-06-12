<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AnalyticsReportRelationships
 */
class AnalyticsReportRelationships extends SpatieData
{
    public function __construct(
        public AnalyticsReportRelationshipsInstances|Optional $instances = new Optional,
    ) {}
}
