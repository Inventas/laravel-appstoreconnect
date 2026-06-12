<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppClipInvocationAttributes
 */
class BetaAppClipInvocationAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $url = new Optional,
    ) {}
}
