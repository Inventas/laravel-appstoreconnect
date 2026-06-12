<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmGitReference
 */
class ScmGitReference extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public ScmGitReferenceAttributes|Optional $attributes = new Optional,
        public ScmGitReferenceRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
