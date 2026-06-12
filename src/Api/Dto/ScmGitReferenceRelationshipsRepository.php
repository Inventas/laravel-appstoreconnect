<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmGitReferenceRelationshipsRepository
 */
class ScmGitReferenceRelationshipsRepository extends SpatieData
{
    public function __construct(
        public ScmGitReferenceRelationshipsRepositoryData|Optional $data = new Optional,
    ) {}
}
