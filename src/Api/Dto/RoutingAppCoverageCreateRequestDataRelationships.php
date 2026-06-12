<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * RoutingAppCoverageCreateRequestDataRelationships
 */
class RoutingAppCoverageCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public RoutingAppCoverageCreateRequestDataRelationshipsAppStoreVersion $appStoreVersion,
    ) {}
}
