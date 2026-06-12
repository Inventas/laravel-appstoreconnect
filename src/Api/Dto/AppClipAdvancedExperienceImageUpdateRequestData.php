<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceImageUpdateRequestData
 */
class AppClipAdvancedExperienceImageUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppClipAdvancedExperienceImageUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
