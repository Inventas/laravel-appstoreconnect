<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * RoutingAppCoverageResponse
 */
class RoutingAppCoverageResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersion>|Optional  $included
     */
    public function __construct(
        public RoutingAppCoverage $data,
        public DocumentLinks $links,
        /** @var array<int, AppStoreVersion>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
