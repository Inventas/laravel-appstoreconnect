<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmRepositoryRelationshipsScmProvider
 */
class ScmRepositoryRelationshipsScmProvider extends SpatieData
{
    public function __construct(
        public ScmRepositoryRelationshipsScmProviderData|Optional $data = new Optional,
    ) {}
}
