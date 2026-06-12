<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsAnalyticsReportRequests
 */
class AppRelationshipsAnalyticsReportRequests extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
    ) {}
}
