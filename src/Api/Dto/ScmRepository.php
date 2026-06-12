<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmRepository
 */
class ScmRepository extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public ScmRepositoryAttributes|Optional $attributes = new Optional,
        public ScmRepositoryRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
