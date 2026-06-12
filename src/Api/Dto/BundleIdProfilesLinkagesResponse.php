<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BundleIdProfilesLinkagesResponse
 */
class BundleIdProfilesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, BundleIdProfilesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BundleIdProfilesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
