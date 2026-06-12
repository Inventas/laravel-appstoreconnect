<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * RoutingAppCoverageUpdateRequest
 */
class RoutingAppCoverageUpdateRequest extends SpatieData
{
    public function __construct(
        public RoutingAppCoverageUpdateRequestData $data,
    ) {}
}
