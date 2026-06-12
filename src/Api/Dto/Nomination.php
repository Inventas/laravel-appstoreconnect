<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * Nomination
 */
class Nomination extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public NominationAttributes|Optional $attributes = new Optional,
        public NominationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
