<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceLocalizationRelationshipsAppClipDefaultExperience
 */
class AppClipDefaultExperienceLocalizationRelationshipsAppClipDefaultExperience extends SpatieData
{
    public function __construct(
        public AppClipDefaultExperienceLocalizationRelationshipsAppClipDefaultExperienceData|Optional $data = new Optional,
    ) {}
}
