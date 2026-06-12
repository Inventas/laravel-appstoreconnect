<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAppStoreVersionExperimentsV2linkagesResponse
 */
class AppAppStoreVersionExperimentsV2linkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppAppStoreVersionExperimentsV2linkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppAppStoreVersionExperimentsV2linkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
