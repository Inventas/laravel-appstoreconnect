<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipDefaultExperienceLocalizationAppClipHeaderImageLinkageResponse
 */
class AppClipDefaultExperienceLocalizationAppClipHeaderImageLinkageResponse extends SpatieData
{
    public function __construct(
        public AppClipDefaultExperienceLocalizationAppClipHeaderImageLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
