<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAppEventsLinkagesResponse
 */
class AppAppEventsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppAppEventsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppAppEventsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
