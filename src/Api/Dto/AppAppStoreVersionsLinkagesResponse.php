<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAppStoreVersionsLinkagesResponse
 */
class AppAppStoreVersionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppAppStoreVersionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppAppStoreVersionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
