<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppSearchKeywordsLinkagesResponse
 */
class AppSearchKeywordsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppSearchKeywordsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppSearchKeywordsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
