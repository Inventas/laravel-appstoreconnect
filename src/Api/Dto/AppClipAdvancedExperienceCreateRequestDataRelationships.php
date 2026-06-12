<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipAdvancedExperienceCreateRequestDataRelationships
 */
class AppClipAdvancedExperienceCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppClipAdvancedExperienceCreateRequestDataRelationshipsAppClip $appClip,
        public AppClipAdvancedExperienceCreateRequestDataRelationshipsHeaderImage $headerImage,
        public AppClipAdvancedExperienceCreateRequestDataRelationshipsLocalizations $localizations,
    ) {}
}
