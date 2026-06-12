<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionLocalizationUpdateRequestDataAttributes
 */
class AppStoreVersionLocalizationUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $description = new Optional,
        public string|Optional|null $keywords = new Optional,
        public string|Optional|null $marketingUrl = new Optional,
        public string|Optional|null $promotionalText = new Optional,
        public string|Optional|null $supportUrl = new Optional,
        public string|Optional|null $whatsNew = new Optional,
    ) {}
}
