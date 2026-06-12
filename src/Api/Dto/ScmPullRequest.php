<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmPullRequest
 */
class ScmPullRequest extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public ScmPullRequestAttributes|Optional $attributes = new Optional,
        public ScmPullRequestRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
