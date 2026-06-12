<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipDefaultExperienceLocalizationCreateRequest
 */
class AppClipDefaultExperienceLocalizationCreateRequest extends SpatieData
{
    public function __construct(
        public AppClipDefaultExperienceLocalizationCreateRequestData $data,
    ) {}
}
