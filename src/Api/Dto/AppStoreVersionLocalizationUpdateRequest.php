<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionLocalizationUpdateRequest
 */
class AppStoreVersionLocalizationUpdateRequest extends SpatieData
{
    public function __construct(
        public AppStoreVersionLocalizationUpdateRequestData $data,
    ) {}
}
