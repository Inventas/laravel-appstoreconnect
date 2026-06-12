<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AnalyticsReportRequest
 */
class AnalyticsReportRequest extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AnalyticsReportRequestAttributes|Optional $attributes = new Optional,
        public AnalyticsReportRequestRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
