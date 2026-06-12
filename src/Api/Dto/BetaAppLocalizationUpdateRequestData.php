<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppLocalizationUpdateRequestData
 */
class BetaAppLocalizationUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BetaAppLocalizationUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
