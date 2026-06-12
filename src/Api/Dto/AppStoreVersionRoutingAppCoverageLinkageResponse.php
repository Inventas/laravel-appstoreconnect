<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionRoutingAppCoverageLinkageResponse
 */
class AppStoreVersionRoutingAppCoverageLinkageResponse extends SpatieData
{
    public function __construct(
        public AppStoreVersionRoutingAppCoverageLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
