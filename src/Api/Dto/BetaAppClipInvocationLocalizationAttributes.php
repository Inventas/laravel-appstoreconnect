<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppClipInvocationLocalizationAttributes
 */
class BetaAppClipInvocationLocalizationAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $title = new Optional,
        public string|Optional $locale = new Optional,
    ) {}
}
