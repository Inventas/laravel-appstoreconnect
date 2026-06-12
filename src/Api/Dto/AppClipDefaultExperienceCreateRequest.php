<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipDefaultExperienceCreateRequest
 */
class AppClipDefaultExperienceCreateRequest extends SpatieData
{
    public function __construct(
        public AppClipDefaultExperienceCreateRequestData $data,
    ) {}
}
