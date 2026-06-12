<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTester
 */
class BetaTester extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BetaTesterAttributes|Optional $attributes = new Optional,
        public BetaTesterRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
