<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterBuildsLinkagesResponse
 */
class BetaTesterBuildsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, BetaTesterBuildsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BetaTesterBuildsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
