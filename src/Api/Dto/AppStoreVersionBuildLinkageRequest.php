<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionBuildLinkageRequest
 */
class AppStoreVersionBuildLinkageRequest extends SpatieData
{
    public function __construct(
        public AppStoreVersionBuildLinkageRequestData $data,
    ) {}
}
