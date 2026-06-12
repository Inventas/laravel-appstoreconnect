<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppCustomProductPageLocalizationUpdateRequest
 */
class AppCustomProductPageLocalizationUpdateRequest extends SpatieData
{
    public function __construct(
        public AppCustomProductPageLocalizationUpdateRequestData $data,
    ) {}
}
