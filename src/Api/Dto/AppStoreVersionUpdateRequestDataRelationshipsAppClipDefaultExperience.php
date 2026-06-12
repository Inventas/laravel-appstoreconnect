<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionUpdateRequestDataRelationshipsAppClipDefaultExperience
 */
class AppStoreVersionUpdateRequestDataRelationshipsAppClipDefaultExperience extends SpatieData
{
    public function __construct(
        public AppStoreVersionUpdateRequestDataRelationshipsAppClipDefaultExperienceData|Optional $data = new Optional,
    ) {}
}
