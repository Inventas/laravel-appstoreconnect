<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmPullRequestRelationships
 */
class ScmPullRequestRelationships extends SpatieData
{
    public function __construct(
        public ScmPullRequestRelationshipsRepository|Optional $repository = new Optional,
    ) {}
}
