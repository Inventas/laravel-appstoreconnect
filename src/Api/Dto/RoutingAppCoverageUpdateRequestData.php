<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * RoutingAppCoverageUpdateRequestData
 */
class RoutingAppCoverageUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public RoutingAppCoverageUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
