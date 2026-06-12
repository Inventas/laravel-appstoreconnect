<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppClipInvocationResponse
 */
class BetaAppClipInvocationResponse extends SpatieData
{
    /**
     * @param  array<int, BetaAppClipInvocationLocalization>|Optional  $included
     */
    public function __construct(
        public BetaAppClipInvocation $data,
        public DocumentLinks $links,
        /** @var array<int, BetaAppClipInvocationLocalization>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
