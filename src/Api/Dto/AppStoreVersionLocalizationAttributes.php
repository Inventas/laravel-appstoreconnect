<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionLocalizationAttributes
 */
class AppStoreVersionLocalizationAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $description = new Optional,
        public string|Optional $locale = new Optional,
        public string|Optional $keywords = new Optional,
        public string|Optional $marketingUrl = new Optional,
        public string|Optional $promotionalText = new Optional,
        public string|Optional $supportUrl = new Optional,
        public string|Optional $whatsNew = new Optional,
    ) {}
}
