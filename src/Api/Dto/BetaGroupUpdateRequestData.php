<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaGroupUpdateRequestData
 */
class BetaGroupUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BetaGroupUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
