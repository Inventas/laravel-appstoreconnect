<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceRelationshipsHeaderImage
 */
class AppClipAdvancedExperienceRelationshipsHeaderImage extends SpatieData
{
    public function __construct(
        public AppClipAdvancedExperienceRelationshipsHeaderImageData|Optional $data = new Optional,
    ) {}
}
