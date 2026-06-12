<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceLocalizationRelationships
 */
class AppClipDefaultExperienceLocalizationRelationships extends SpatieData
{
    public function __construct(
        public AppClipDefaultExperienceLocalizationRelationshipsAppClipDefaultExperience|Optional $appClipDefaultExperience = new Optional,
        public AppClipDefaultExperienceLocalizationRelationshipsAppClipHeaderImage|Optional $appClipHeaderImage = new Optional,
    ) {}
}
