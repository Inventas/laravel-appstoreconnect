<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaBuildLocalizationAttributes
 */
class BetaBuildLocalizationAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $whatsNew = new Optional,
        public string|Optional $locale = new Optional,
    ) {}
}
