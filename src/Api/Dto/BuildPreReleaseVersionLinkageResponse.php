<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildPreReleaseVersionLinkageResponse
 */
class BuildPreReleaseVersionLinkageResponse extends SpatieData
{
    public function __construct(
        public BuildPreReleaseVersionLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
