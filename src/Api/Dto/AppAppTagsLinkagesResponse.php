<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAppTagsLinkagesResponse
 */
class AppAppTagsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppAppTagsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppAppTagsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
