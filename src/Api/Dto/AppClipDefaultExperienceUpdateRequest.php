<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipDefaultExperienceUpdateRequest
 */
class AppClipDefaultExperienceUpdateRequest extends SpatieData
{
    public function __construct(
        public AppClipDefaultExperienceUpdateRequestData $data,
    ) {}
}
