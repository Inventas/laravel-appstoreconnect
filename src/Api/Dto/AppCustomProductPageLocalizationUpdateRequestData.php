<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageLocalizationUpdateRequestData
 */
class AppCustomProductPageLocalizationUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppCustomProductPageLocalizationUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
