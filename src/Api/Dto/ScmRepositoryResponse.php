<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmRepositoryResponse
 */
class ScmRepositoryResponse extends SpatieData
{
    /**
     * @param  array<int, ScmGitReference|ScmProvider>|Optional  $included
     */
    public function __construct(
        public ScmRepository $data,
        public DocumentLinks $links,
        /** @var array<int, ScmGitReference|ScmProvider>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
