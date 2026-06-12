<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildBuildBetaDetailLinkageResponse
 */
class BuildBuildBetaDetailLinkageResponse extends SpatieData
{
    public function __construct(
        public BuildBuildBetaDetailLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
