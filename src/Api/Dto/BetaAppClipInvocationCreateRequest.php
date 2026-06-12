<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppClipInvocationCreateRequest
 */
class BetaAppClipInvocationCreateRequest extends SpatieData
{
    /**
     * @param  array<int, BetaAppClipInvocationLocalizationInlineCreate>|Optional  $included
     */
    public function __construct(
        public BetaAppClipInvocationCreateRequestData $data,
        /** @var array<int, BetaAppClipInvocationLocalizationInlineCreate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
