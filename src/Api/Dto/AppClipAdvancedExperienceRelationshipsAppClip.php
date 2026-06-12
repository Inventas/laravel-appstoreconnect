<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceRelationshipsAppClip
 */
class AppClipAdvancedExperienceRelationshipsAppClip extends SpatieData
{
    public function __construct(
        public AppClipAdvancedExperienceRelationshipsAppClipData|Optional $data = new Optional,
    ) {}
}
