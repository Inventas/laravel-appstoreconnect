<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppClipInvocationUpdateRequestData
 */
class BetaAppClipInvocationUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BetaAppClipInvocationUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
