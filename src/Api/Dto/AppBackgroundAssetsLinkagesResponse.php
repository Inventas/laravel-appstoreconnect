<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppBackgroundAssetsLinkagesResponse
 */
class AppBackgroundAssetsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppBackgroundAssetsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppBackgroundAssetsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
