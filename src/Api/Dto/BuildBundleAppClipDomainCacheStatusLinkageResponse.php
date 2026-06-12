<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildBundleAppClipDomainCacheStatusLinkageResponse
 */
class BuildBundleAppClipDomainCacheStatusLinkageResponse extends SpatieData
{
    public function __construct(
        public BuildBundleAppClipDomainCacheStatusLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
