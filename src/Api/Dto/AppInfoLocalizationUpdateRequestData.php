<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoLocalizationUpdateRequestData
 */
class AppInfoLocalizationUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppInfoLocalizationUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
