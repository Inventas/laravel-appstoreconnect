<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewSetAppPreviewsLinkagesResponse
 */
class AppPreviewSetAppPreviewsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppPreviewSetAppPreviewsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppPreviewSetAppPreviewsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
