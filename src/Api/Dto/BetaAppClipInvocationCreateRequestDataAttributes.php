<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppClipInvocationCreateRequestDataAttributes
 */
class BetaAppClipInvocationCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $url,
    ) {}
}
