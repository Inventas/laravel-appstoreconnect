<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ProfileDevicesLinkagesResponse
 */
class ProfileDevicesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, ProfileDevicesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, ProfileDevicesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
