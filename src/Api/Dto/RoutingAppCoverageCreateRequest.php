<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * RoutingAppCoverageCreateRequest
 */
class RoutingAppCoverageCreateRequest extends SpatieData
{
    public function __construct(
        public RoutingAppCoverageCreateRequestData $data,
    ) {}
}
