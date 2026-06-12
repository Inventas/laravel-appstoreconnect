<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppCustomProductPageLocalizationCreateRequest
 */
class AppCustomProductPageLocalizationCreateRequest extends SpatieData
{
    public function __construct(
        public AppCustomProductPageLocalizationCreateRequestData $data,
    ) {}
}
