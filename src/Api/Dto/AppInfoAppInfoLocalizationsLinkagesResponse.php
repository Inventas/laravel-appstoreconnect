<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoAppInfoLocalizationsLinkagesResponse
 */
class AppInfoAppInfoLocalizationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppInfoAppInfoLocalizationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppInfoAppInfoLocalizationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
