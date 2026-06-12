<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaGroup
 */
class BetaGroup extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BetaGroupAttributes|Optional $attributes = new Optional,
        public BetaGroupRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
