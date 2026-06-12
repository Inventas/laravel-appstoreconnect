<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreReleaseVersionsLinkagesResponse
 */
class AppPreReleaseVersionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppPreReleaseVersionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppPreReleaseVersionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
