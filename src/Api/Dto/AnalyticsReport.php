<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AnalyticsReport
 */
class AnalyticsReport extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AnalyticsReportAttributes|Optional $attributes = new Optional,
        public AnalyticsReportRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
