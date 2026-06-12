<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmPullRequestsResponse
 */
class ScmPullRequestsResponse extends SpatieData
{
    /**
     * @param  array<int, ScmPullRequest>  $data
     * @param  array<int, ScmRepository>|Optional  $included
     */
    public function __construct(
        /** @var array<int, ScmPullRequest> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, ScmRepository>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
