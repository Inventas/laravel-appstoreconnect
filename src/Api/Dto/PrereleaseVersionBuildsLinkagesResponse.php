<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PrereleaseVersionBuildsLinkagesResponse
 */
class PrereleaseVersionBuildsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, PrereleaseVersionBuildsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, PrereleaseVersionBuildsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
