<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunsResponse
 */
class CiBuildRunsResponse extends SpatieData
{
    /**
     * @param  array<int, CiBuildRun>  $data
     * @param  array<int, Build|CiProduct|CiWorkflow|ScmGitReference|ScmPullRequest>|Optional  $included
     */
    public function __construct(
        /** @var array<int, CiBuildRun> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, Build|CiProduct|CiWorkflow|ScmGitReference|ScmPullRequest>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
