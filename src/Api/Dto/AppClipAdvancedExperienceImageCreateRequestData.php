<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipAdvancedExperienceImageCreateRequestData
 */
class AppClipAdvancedExperienceImageCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppClipAdvancedExperienceImageCreateRequestDataAttributes $attributes,
    ) {}
}
