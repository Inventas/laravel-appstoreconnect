<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmProviderRepositoriesLinkagesResponse
 */
class ScmProviderRepositoriesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, ScmProviderRepositoriesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, ScmProviderRepositoriesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
