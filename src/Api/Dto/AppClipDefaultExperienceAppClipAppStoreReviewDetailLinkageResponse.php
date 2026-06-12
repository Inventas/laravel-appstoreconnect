<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipDefaultExperienceAppClipAppStoreReviewDetailLinkageResponse
 */
class AppClipDefaultExperienceAppClipAppStoreReviewDetailLinkageResponse extends SpatieData
{
    public function __construct(
        public AppClipDefaultExperienceAppClipAppStoreReviewDetailLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
