<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmProvider
 */
class ScmProvider extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public ScmProviderAttributes|Optional $attributes = new Optional,
        public ScmProviderRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
