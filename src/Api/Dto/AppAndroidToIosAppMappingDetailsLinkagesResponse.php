<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAndroidToIosAppMappingDetailsLinkagesResponse
 */
class AppAndroidToIosAppMappingDetailsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppAndroidToIosAppMappingDetailsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppAndroidToIosAppMappingDetailsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
