<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppClipInvocationsResponse
 */
class BetaAppClipInvocationsResponse extends SpatieData
{
    /**
     * @param  array<int, BetaAppClipInvocation>  $data
     * @param  array<int, BetaAppClipInvocationLocalization>|Optional  $included
     */
    public function __construct(
        /** @var array<int, BetaAppClipInvocation> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, BetaAppClipInvocationLocalization>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
