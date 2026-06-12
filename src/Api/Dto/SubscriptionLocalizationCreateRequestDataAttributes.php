<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionLocalizationCreateRequestDataAttributes
 */
class SubscriptionLocalizationCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $name,
        public string $locale,
        public string|Optional|null $description = new Optional,
    ) {}
}
