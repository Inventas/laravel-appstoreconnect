<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildBundleAppClipDomainDebugStatusLinkageResponse
 */
class BuildBundleAppClipDomainDebugStatusLinkageResponse extends SpatieData
{
    public function __construct(
        public BuildBundleAppClipDomainDebugStatusLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
