<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipDefaultExperienceLocalizationCreateRequestDataRelationships
 */
class AppClipDefaultExperienceLocalizationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppClipDefaultExperienceLocalizationCreateRequestDataRelationshipsAppClipDefaultExperience $appClipDefaultExperience,
    ) {}
}
