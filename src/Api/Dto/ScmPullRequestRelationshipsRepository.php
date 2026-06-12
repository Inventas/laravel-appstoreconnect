<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmPullRequestRelationshipsRepository
 */
class ScmPullRequestRelationshipsRepository extends SpatieData
{
    public function __construct(
        public ScmPullRequestRelationshipsRepositoryData|Optional $data = new Optional,
    ) {}
}
