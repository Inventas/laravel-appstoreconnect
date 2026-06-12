<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildBundleBetaAppClipInvocationsLinkagesResponse
 */
class BuildBundleBetaAppClipInvocationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, BuildBundleBetaAppClipInvocationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BuildBundleBetaAppClipInvocationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
