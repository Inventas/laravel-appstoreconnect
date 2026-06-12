<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceUpdateRequestDataRelationshipsAppClip
 */
class AppClipAdvancedExperienceUpdateRequestDataRelationshipsAppClip extends SpatieData
{
    public function __construct(
        public AppClipAdvancedExperienceUpdateRequestDataRelationshipsAppClipData|Optional $data = new Optional,
    ) {}
}
