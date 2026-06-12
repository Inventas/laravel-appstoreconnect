<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunActionsLinkagesResponse
 */
class CiBuildRunActionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, CiBuildRunActionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, CiBuildRunActionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
