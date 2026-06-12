<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppBuildUploadsLinkagesResponse
 */
class AppBuildUploadsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppBuildUploadsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppBuildUploadsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
