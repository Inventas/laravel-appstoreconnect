<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipAdvancedExperienceImageResponse
 */
class AppClipAdvancedExperienceImageResponse extends SpatieData
{
    public function __construct(
        public AppClipAdvancedExperienceImage $data,
        public DocumentLinks $links,
    ) {}
}
