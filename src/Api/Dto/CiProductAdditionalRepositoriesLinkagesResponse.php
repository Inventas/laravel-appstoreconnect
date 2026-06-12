<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiProductAdditionalRepositoriesLinkagesResponse
 */
class CiProductAdditionalRepositoriesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, CiProductAdditionalRepositoriesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, CiProductAdditionalRepositoriesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
