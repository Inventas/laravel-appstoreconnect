<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmProviderRelationships
 */
class ScmProviderRelationships extends SpatieData
{
    public function __construct(
        public ScmProviderRelationshipsRepositories|Optional $repositories = new Optional,
    ) {}
}
