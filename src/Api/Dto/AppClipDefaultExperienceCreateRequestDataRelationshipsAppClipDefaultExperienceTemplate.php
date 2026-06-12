<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceCreateRequestDataRelationshipsAppClipDefaultExperienceTemplate
 */
class AppClipDefaultExperienceCreateRequestDataRelationshipsAppClipDefaultExperienceTemplate extends SpatieData
{
    public function __construct(
        public AppClipDefaultExperienceCreateRequestDataRelationshipsAppClipDefaultExperienceTemplateData|Optional $data = new Optional,
    ) {}
}
