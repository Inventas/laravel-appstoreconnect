<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUpdateRequestData
 */
class BuildUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BuildUpdateRequestDataAttributes|Optional $attributes = new Optional,
        public BuildUpdateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
