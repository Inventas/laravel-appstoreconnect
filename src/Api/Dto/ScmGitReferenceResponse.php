<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmGitReferenceResponse
 */
class ScmGitReferenceResponse extends SpatieData
{
    /**
     * @param  array<int, ScmRepository>|Optional  $included
     */
    public function __construct(
        public ScmGitReference $data,
        public DocumentLinks $links,
        /** @var array<int, ScmRepository>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
