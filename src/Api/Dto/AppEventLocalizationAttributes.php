<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventLocalizationAttributes
 */
class AppEventLocalizationAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $locale = new Optional,
        public string|Optional $name = new Optional,
        public string|Optional $shortDescription = new Optional,
        public string|Optional $longDescription = new Optional,
    ) {}
}
