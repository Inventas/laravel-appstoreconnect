<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseLocalizationAttributes
 */
class InAppPurchaseLocalizationAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public string|Optional $locale = new Optional,
        public string|Optional $description = new Optional,
        public string|Optional $state = new Optional,
    ) {}
}
