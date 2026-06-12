<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildActionIssuesLinkagesResponse
 */
class CiBuildActionIssuesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, CiBuildActionIssuesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, CiBuildActionIssuesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
