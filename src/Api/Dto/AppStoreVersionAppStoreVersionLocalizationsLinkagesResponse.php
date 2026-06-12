<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionAppStoreVersionLocalizationsLinkagesResponse
 */
class AppStoreVersionAppStoreVersionLocalizationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionAppStoreVersionLocalizationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppStoreVersionAppStoreVersionLocalizationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
