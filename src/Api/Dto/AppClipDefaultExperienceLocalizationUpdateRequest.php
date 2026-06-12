<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipDefaultExperienceLocalizationUpdateRequest
 */
class AppClipDefaultExperienceLocalizationUpdateRequest extends SpatieData
{
    public function __construct(
        public AppClipDefaultExperienceLocalizationUpdateRequestData $data,
    ) {}
}
