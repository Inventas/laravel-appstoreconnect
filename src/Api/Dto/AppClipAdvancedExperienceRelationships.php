<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceRelationships
 */
class AppClipAdvancedExperienceRelationships extends SpatieData
{
    public function __construct(
        public AppClipAdvancedExperienceRelationshipsAppClip|Optional $appClip = new Optional,
        public AppClipAdvancedExperienceRelationshipsHeaderImage|Optional $headerImage = new Optional,
        public AppClipAdvancedExperienceRelationshipsLocalizations|Optional $localizations = new Optional,
    ) {}
}
