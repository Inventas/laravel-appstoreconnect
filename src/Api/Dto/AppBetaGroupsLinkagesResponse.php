<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppBetaGroupsLinkagesResponse
 */
class AppBetaGroupsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppBetaGroupsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppBetaGroupsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
