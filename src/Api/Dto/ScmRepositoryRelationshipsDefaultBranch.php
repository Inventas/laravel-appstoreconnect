<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmRepositoryRelationshipsDefaultBranch
 */
class ScmRepositoryRelationshipsDefaultBranch extends SpatieData
{
    public function __construct(
        public ScmRepositoryRelationshipsDefaultBranchData|Optional $data = new Optional,
    ) {}
}
