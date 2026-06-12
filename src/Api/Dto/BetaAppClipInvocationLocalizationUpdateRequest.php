<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppClipInvocationLocalizationUpdateRequest
 */
class BetaAppClipInvocationLocalizationUpdateRequest extends SpatieData
{
    public function __construct(
        public BetaAppClipInvocationLocalizationUpdateRequestData $data,
    ) {}
}
