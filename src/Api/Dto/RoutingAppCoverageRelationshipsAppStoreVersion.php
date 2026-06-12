<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * RoutingAppCoverageRelationshipsAppStoreVersion
 */
class RoutingAppCoverageRelationshipsAppStoreVersion extends SpatieData
{
    public function __construct(
        public RoutingAppCoverageRelationshipsAppStoreVersionData|Optional $data = new Optional,
    ) {}
}
