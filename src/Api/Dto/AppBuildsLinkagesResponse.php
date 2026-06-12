<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppBuildsLinkagesResponse
 */
class AppBuildsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppBuildsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppBuildsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
