<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * RoutingAppCoverage
 */
class RoutingAppCoverage extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public RoutingAppCoverageAttributes|Optional $attributes = new Optional,
        public RoutingAppCoverageRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
