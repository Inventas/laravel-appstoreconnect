<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaBuildLocalizationUpdateRequestData
 */
class BetaBuildLocalizationUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BetaBuildLocalizationUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
