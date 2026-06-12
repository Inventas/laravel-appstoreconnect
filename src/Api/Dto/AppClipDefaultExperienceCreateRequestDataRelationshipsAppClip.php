<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipDefaultExperienceCreateRequestDataRelationshipsAppClip
 */
class AppClipDefaultExperienceCreateRequestDataRelationshipsAppClip extends SpatieData
{
    public function __construct(
        public AppClipDefaultExperienceCreateRequestDataRelationshipsAppClipData $data,
    ) {}
}
