<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmPullRequestResponse
 */
class ScmPullRequestResponse extends SpatieData
{
    /**
     * @param  array<int, ScmRepository>|Optional  $included
     */
    public function __construct(
        public ScmPullRequest $data,
        public DocumentLinks $links,
        /** @var array<int, ScmRepository>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
