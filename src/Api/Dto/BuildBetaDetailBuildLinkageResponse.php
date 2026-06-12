<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildBetaDetailBuildLinkageResponse
 */
class BuildBetaDetailBuildLinkageResponse extends SpatieData
{
    public function __construct(
        public BuildBetaDetailBuildLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
