<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiProductBuildRunsLinkagesResponse
 */
class CiProductBuildRunsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, CiProductBuildRunsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, CiProductBuildRunsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
