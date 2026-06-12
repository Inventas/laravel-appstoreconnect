<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventLocalizationUpdateRequestDataAttributes
 */
class AppEventLocalizationUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $name = new Optional,
        public string|Optional|null $shortDescription = new Optional,
        public string|Optional|null $longDescription = new Optional,
    ) {}
}
