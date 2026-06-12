<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipDefaultExperienceReleaseWithAppStoreVersionLinkageResponse
 */
class AppClipDefaultExperienceReleaseWithAppStoreVersionLinkageResponse extends SpatieData
{
    public function __construct(
        public AppClipDefaultExperienceReleaseWithAppStoreVersionLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
