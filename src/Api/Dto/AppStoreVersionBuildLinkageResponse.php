<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionBuildLinkageResponse
 */
class AppStoreVersionBuildLinkageResponse extends SpatieData
{
    public function __construct(
        public AppStoreVersionBuildLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
