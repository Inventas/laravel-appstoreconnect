<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRun
 */
class CiBuildRun extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public CiBuildRunAttributes|Optional $attributes = new Optional,
        public CiBuildRunRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
