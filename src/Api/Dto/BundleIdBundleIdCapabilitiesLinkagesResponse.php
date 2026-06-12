<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BundleIdBundleIdCapabilitiesLinkagesResponse
 */
class BundleIdBundleIdCapabilitiesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, BundleIdBundleIdCapabilitiesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BundleIdBundleIdCapabilitiesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
