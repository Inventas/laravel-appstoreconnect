<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UserUpdateRequestData
 */
class UserUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public UserUpdateRequestDataAttributes|Optional $attributes = new Optional,
        public UserUpdateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
