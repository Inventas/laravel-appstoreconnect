<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceUpdateRequestDataRelationshipsHeaderImage
 */
class AppClipAdvancedExperienceUpdateRequestDataRelationshipsHeaderImage extends SpatieData
{
    public function __construct(
        public AppClipAdvancedExperienceUpdateRequestDataRelationshipsHeaderImageData|Optional $data = new Optional,
    ) {}
}
