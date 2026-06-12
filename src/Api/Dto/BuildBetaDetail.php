<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildBetaDetail
 */
class BuildBetaDetail extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BuildBetaDetailAttributes|Optional $attributes = new Optional,
        public BuildBetaDetailRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
