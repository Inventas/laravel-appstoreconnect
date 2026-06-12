<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppClipInvocationUpdateRequest
 */
class BetaAppClipInvocationUpdateRequest extends SpatieData
{
    public function __construct(
        public BetaAppClipInvocationUpdateRequestData $data,
    ) {}
}
