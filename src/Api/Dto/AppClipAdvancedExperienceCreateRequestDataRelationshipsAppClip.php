<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipAdvancedExperienceCreateRequestDataRelationshipsAppClip
 */
class AppClipAdvancedExperienceCreateRequestDataRelationshipsAppClip extends SpatieData
{
    public function __construct(
        public AppClipAdvancedExperienceCreateRequestDataRelationshipsAppClipData $data,
    ) {}
}
