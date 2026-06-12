<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildIconsLinkagesResponse
 */
class BuildIconsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, BuildIconsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BuildIconsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
