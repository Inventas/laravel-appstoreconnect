<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppClipInvocationLocalizationResponse
 */
class BetaAppClipInvocationLocalizationResponse extends SpatieData
{
    public function __construct(
        public BetaAppClipInvocationLocalization $data,
        public DocumentLinks $links,
    ) {}
}
