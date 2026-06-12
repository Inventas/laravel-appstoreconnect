<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionAppStoreVersionExperimentsLinkagesResponse
 */
class AppStoreVersionAppStoreVersionExperimentsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionAppStoreVersionExperimentsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppStoreVersionAppStoreVersionExperimentsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
