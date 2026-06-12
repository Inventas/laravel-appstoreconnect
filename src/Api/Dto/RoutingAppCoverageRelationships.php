<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * RoutingAppCoverageRelationships
 */
class RoutingAppCoverageRelationships extends SpatieData
{
    public function __construct(
        public RoutingAppCoverageRelationshipsAppStoreVersion|Optional $appStoreVersion = new Optional,
    ) {}
}
