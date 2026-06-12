<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionLocalizationUpdateRequestData
 */
class AppStoreVersionLocalizationUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppStoreVersionLocalizationUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
