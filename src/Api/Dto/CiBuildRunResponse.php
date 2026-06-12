<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunResponse
 */
class CiBuildRunResponse extends SpatieData
{
    /**
     * @param  array<int, Build|CiProduct|CiWorkflow|ScmGitReference|ScmPullRequest>|Optional  $included
     */
    public function __construct(
        public CiBuildRun $data,
        public DocumentLinks $links,
        /** @var array<int, Build|CiProduct|CiWorkflow|ScmGitReference|ScmPullRequest>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
