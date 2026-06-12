<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionRelationshipsRoutingAppCoverage
 */
class AppStoreVersionRelationshipsRoutingAppCoverage extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppStoreVersionRelationshipsRoutingAppCoverageData|Optional $data = new Optional,
    ) {}
}
