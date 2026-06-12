<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppClipInvocationLocalizationCreateRequest
 */
class BetaAppClipInvocationLocalizationCreateRequest extends SpatieData
{
    public function __construct(
        public BetaAppClipInvocationLocalizationCreateRequestData $data,
    ) {}
}
