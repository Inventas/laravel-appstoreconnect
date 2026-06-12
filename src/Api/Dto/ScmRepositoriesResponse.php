<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmRepositoriesResponse
 */
class ScmRepositoriesResponse extends SpatieData
{
    /**
     * @param  array<int, ScmRepository>  $data
     * @param  array<int, ScmGitReference|ScmProvider>|Optional  $included
     */
    public function __construct(
        /** @var array<int, ScmRepository> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, ScmGitReference|ScmProvider>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
