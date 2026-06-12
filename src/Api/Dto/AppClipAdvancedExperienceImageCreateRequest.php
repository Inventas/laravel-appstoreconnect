<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipAdvancedExperienceImageCreateRequest
 */
class AppClipAdvancedExperienceImageCreateRequest extends SpatieData
{
    public function __construct(
        public AppClipAdvancedExperienceImageCreateRequestData $data,
    ) {}
}
