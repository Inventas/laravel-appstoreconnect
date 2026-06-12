<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmRepositoryRelationships
 */
class ScmRepositoryRelationships extends SpatieData
{
    public function __construct(
        public ScmRepositoryRelationshipsScmProvider|Optional $scmProvider = new Optional,
        public ScmRepositoryRelationshipsDefaultBranch|Optional $defaultBranch = new Optional,
        public ScmRepositoryRelationshipsGitReferences|Optional $gitReferences = new Optional,
        public ScmRepositoryRelationshipsPullRequests|Optional $pullRequests = new Optional,
    ) {}
}
