<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionAppStoreVersionExperimentsV2linkagesResponse
 */
class AppStoreVersionAppStoreVersionExperimentsV2linkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionAppStoreVersionExperimentsV2linkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppStoreVersionAppStoreVersionExperimentsV2linkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
