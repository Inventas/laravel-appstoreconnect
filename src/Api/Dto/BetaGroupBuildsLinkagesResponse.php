<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaGroupBuildsLinkagesResponse
 */
class BetaGroupBuildsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, BetaGroupBuildsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BetaGroupBuildsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
