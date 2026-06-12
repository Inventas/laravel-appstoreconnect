<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceUpdateRequestDataRelationships
 */
class AppClipAdvancedExperienceUpdateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppClipAdvancedExperienceUpdateRequestDataRelationshipsAppClip|Optional $appClip = new Optional,
        public AppClipAdvancedExperienceUpdateRequestDataRelationshipsHeaderImage|Optional $headerImage = new Optional,
        public AppClipAdvancedExperienceUpdateRequestDataRelationshipsLocalizations|Optional $localizations = new Optional,
    ) {}
}
