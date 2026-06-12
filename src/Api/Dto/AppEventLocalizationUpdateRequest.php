<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEventLocalizationUpdateRequest
 */
class AppEventLocalizationUpdateRequest extends SpatieData
{
    public function __construct(
        public AppEventLocalizationUpdateRequestData $data,
    ) {}
}
