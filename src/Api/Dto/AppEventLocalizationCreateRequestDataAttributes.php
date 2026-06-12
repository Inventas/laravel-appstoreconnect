<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventLocalizationCreateRequestDataAttributes
 */
class AppEventLocalizationCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $locale,
        public string|Optional|null $name = new Optional,
        public string|Optional|null $shortDescription = new Optional,
        public string|Optional|null $longDescription = new Optional,
    ) {}
}
