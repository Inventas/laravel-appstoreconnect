<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventLocalizationUpdateRequestData
 */
class AppEventLocalizationUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppEventLocalizationUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
