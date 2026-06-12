<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAppInfosLinkagesResponse
 */
class AppAppInfosLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppAppInfosLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppAppInfosLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
