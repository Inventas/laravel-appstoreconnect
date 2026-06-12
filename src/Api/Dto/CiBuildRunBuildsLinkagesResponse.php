<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunBuildsLinkagesResponse
 */
class CiBuildRunBuildsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, CiBuildRunBuildsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, CiBuildRunBuildsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
