<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceRelationshipsAppClip
 */
class AppClipDefaultExperienceRelationshipsAppClip extends SpatieData
{
    public function __construct(
        public AppClipDefaultExperienceRelationshipsAppClipData|Optional $data = new Optional,
    ) {}
}
