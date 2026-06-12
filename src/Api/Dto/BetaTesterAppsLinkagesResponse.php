<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterAppsLinkagesResponse
 */
class BetaTesterAppsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, BetaTesterAppsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BetaTesterAppsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
