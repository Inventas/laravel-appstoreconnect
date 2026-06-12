<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipDefaultExperienceReleaseWithAppStoreVersionLinkageRequest
 */
class AppClipDefaultExperienceReleaseWithAppStoreVersionLinkageRequest extends SpatieData
{
    public function __construct(
        public AppClipDefaultExperienceReleaseWithAppStoreVersionLinkageRequestData $data,
    ) {}
}
