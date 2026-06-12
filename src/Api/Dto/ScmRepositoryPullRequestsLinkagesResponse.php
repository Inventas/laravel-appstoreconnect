<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmRepositoryPullRequestsLinkagesResponse
 */
class ScmRepositoryPullRequestsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, ScmRepositoryPullRequestsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, ScmRepositoryPullRequestsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
