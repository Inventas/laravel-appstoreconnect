<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * Profile
 */
class Profile extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public ProfileAttributes|Optional $attributes = new Optional,
        public ProfileRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
