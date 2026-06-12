<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipAdvancedExperienceCreateRequestDataRelationshipsHeaderImage
 */
class AppClipAdvancedExperienceCreateRequestDataRelationshipsHeaderImage extends SpatieData
{
    public function __construct(
        public AppClipAdvancedExperienceCreateRequestDataRelationshipsHeaderImageData $data,
    ) {}
}
